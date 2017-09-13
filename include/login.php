<?php
    require "connect.php";
include "function_test_input.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
$username = $_POST['username'];
$password = ($_POST['password']);
$sql = "SELECT * FROM `login`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch()){
        if($username == $row['username'] and password_verify($password, $row['password'])){
    

        setcookie($cookie_name,$row['username'], time() + (86400 * 30), "/");
        setcookie("userLevel",$row[$userLevel], time() + (86400 * 30), "/");
header("location:../index.php");
    }else{

    }}
    // set the resulting array to associative
        print("thats not a valid login");
        header( "Refresh:5; url=../index.php", true, 303);

?>