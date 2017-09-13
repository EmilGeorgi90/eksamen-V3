<?php
include "connect.php"
$sql = "SELECT * FROM content where overskrift = ? or forfatter = ? or ORDER BY id desc ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $_GET['seach']);
$stmt->bindParam(2, $_GET['seach']);
$stmt->bindParam(3, $_GET['filter']);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$_SESSION['search'] = $stmt->fetchAll();