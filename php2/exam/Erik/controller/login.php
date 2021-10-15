<?php
    require 'conn.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    if (
        empty($login) ||
        empty($password)
    ){
        echo 'datark tvyalner'.'<br>';
        die('<a href="./../view/login.php">Veradarnal</a>');

    }

    $src = $conn->connect()->query('SELECT * FROM `users` WHERE 1')->fetchAll();

    foreach ($src as $item ){
        if($item['login'] == $login && $item['password'] == $password){
            $user = $item;
        }
        else{
            echo 'chka tenc user'.'<br>';
            echo "<a href='./../view/login.php'>Veradarnal het</a><br>";
        }
    }
     $user['name'] = $_POST['name'];

    header('location: ./../view/logined.php');




