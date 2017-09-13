<?php
    require "connect.php";
include "function_test_input.php";
$usnermae = $password = $replayPassword = "";
//starting when we post the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //remove all sorts of special things we dont want in our database
    $username = test_input($_POST["username"]);
    //remove all sorts of special things we dont want in our database
    $password = test_input($_POST["password"]);
    $replayPassword = test_input($_POST["replayPassword"]);
    $email = test_input($_POST["email"]);
    //looking for the password and replay password is equal
          if($replayPassword != $password){
              //if there are nog equal
            echo "you password is not equal";
        header( "Refresh:5; url=../index.php", true, 303);
          }else{
            //our try method
        try{
        //hashing the password    
        $password = password_hash($password, PASSWORD_DEFAULT);
        //insert it into database
        $sql = "INSERT INTO `login`(`username`, `password`, email) VALUES (?,?,?)";
        //preparing the database sql script
        $statement = $conn->prepare($sql);
        //bind the first parameter
        $statement->bindParam(1, $username);
        //bind the second parameter
        $statement->bindParam(2, $password);
        $statement->bindParam(3, $email);
        //execute the script/query
            $statement->execute();
            //header back to the front page
        header("location:../index.php");
        //setting a cookie that says you are logged in
        setcookie($cookie_name,$_POST['username'], time() + (86400 * 30), "/");
        }
        //if any pdo errors they come here
        catch(PDOException $e){
            echo "email is allready in use". $e->getMessage();
        }
      }
}
?>