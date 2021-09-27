<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        $_SESSION['msg'] = 'Login please!';
        header('location:./../../index.php');
        die;
    } else {
        print_r($_SESSION['user']);
    }

    ?>

<a href="./../../server/model/logout.php"> Log out</a>
