<?php
session_start();
include "connect.php"; 
$sql = "SELECT * FROM articles where overskrift = ? or username = ? ORDER BY id desc ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $_GET['search']);
$stmt->bindParam(2, $_GET['search']);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$_SESSION['search'] = $stmt->fetchAll();

header("location:../index.php");