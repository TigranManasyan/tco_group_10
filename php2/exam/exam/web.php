<?php
require "DB.php";

$db = new Db();

$pdo = $db->connection();
$name = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "
                        INSERT INTO `user` 
                            (`name`, `email`, `password`) 
                            VALUES 
                            ('$name', '$email', '$pass')";
$query = $pdo->prepare($sql);
$query->execute();
header('location:page.php');