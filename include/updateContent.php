<?php
session_start();
require "connect.php";
include "function_test_input.php";
$username = $_COOKIE[$cookie_name];
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
print_r($target_file);
$fileToUpload = $imgAlt = $description = $type = $class = $cardSet = $cardName  = "";
//checking for the file is empty

    $fileToUploadErr = "you need to upload imgae";

    $fileToUpload = $target_file;
  

    $imgAlt = test_input($_POST["imgAlt"]);
          // looking for password and replay password are equel


    $description = test_input($_POST["articleText"]);
    // check if e-mail address is well-formed

    $type = test_input($_POST["kategori"]);


    $rating = test_input($_POST["rating"]);
    // check if e-mail address is well-formed
    $title = test_input($_POST["overskrift"]);
    // check if e-mail address is well-formed

        try{
            $target_file = "include/$target_file";
        $sql = "UPDATE articles set `imgSrc` = ?, `imgAlt` = ?, `overskrift` = ?, `articleText` = ?, `rating`= ?, `kategori`= ?, `username` = ? where overskrift = ?; select login.username from login inner join articles on login.username = articles.username";
        $statement = $conn->prepare($sql);
        $statement->bindParam(1, $target_file);
            $statement->bindParam(2, $imgAlt);
            $statement->bindParam(3, $description);
            $statement->bindParam(4, $type);
            $statement->bindParam(5, $rating);
            $statement->bindParam(7, $title);
            $statement->bindParam(8, $_COOKIE[$cookie_name]);
            
            for($i = 0; $i < count($_SESSION["articleName"]); $i++){
                
                if($_SESSION["articleName"][$i]["overskrift"] == $_SESSION["currentCard"][$i]["overskrift"]){
                    $statement->bindParam(9, $_SESSION["articleName"][$i]["articleName"]);
            $statement->execute();
            break;
                }
            }
            header("location:../index.php");
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

?>