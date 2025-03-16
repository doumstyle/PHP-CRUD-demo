<?php
include '../db.php';
$id = $_GET['id'];

$sql = "DELETE FROM demo_table WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location:index.php");