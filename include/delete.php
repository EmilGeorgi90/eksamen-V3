<?php
session_start();
require "connect.php";
//if the user level is over level 1
if($_COOKIE[$userLevel] > 1){
    $sql ="DELETE FROM `articles` WHERE overskrift = ?";    
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(1, $_POST["overskrift"]);
    $stmt->execute();    
    header("location:../index.php");
    //looking at if it the some as it was at the start
}else{
    //prepare the script
    $sql ="DELETE FROM articles where overskrift = ? AND username = ?";
    //prepare the query
    $stmt = $conn->prepare($sql);
    //bind the first parameter
    $stmt->bindParam(1, $_POST["overskrift"]);
    $stmt->bindParam(2, $_COOKIE["$cookie_name"]);
    $stmt->execute();
    header("location:../index.php");
}

 


?>