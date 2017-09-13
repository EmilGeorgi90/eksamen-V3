<?php
    require "connect.php";
include "function_test_input.php";
//starts when posting
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//takes the varibles
$username = $_POST['username'];
$userLevel = $_POST['userLevel'];
$sql = "update login set userLevel = '$userLevel' where username = '$username'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
header("location:../index.php");
}
?>