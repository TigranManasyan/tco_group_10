<?php
    require './db.php';
    require 'lim.php';
    $page = $_GET['page'];
    $lim = 5;
    $page = ($page - 1) * $lim;
    $sql = "SELECT * FROM `posts` LIMIT $page, $lim";
     $result = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
    //header('location:"/index.php"');
