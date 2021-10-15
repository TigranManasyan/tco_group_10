<?php
    require 'conn.php';

    $name = $_POST['reg_name'];
    $login = $_POST['reg_login'];
    $password = $_POST['reg_password'];



if (empty($name) ||
    empty($login) ||
    empty($password)) {

    die(header('location: ./../view/login.php'));
}

    $conn->connect()->query("INSERT INTO `users`(`id`, `name`, `login`, `password`) VALUES ('','$name','$login','$password')");

