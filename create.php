<?php
include("../db.php");
$name = $_POST["name"];
$score = $_POST["score"];

$sql = "INSERT INTO demo_table (name, score) VALUES ('$name', '$score')";
$conn->query($sql);
$conn->close();
header("location:index.php");