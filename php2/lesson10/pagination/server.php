<?php
    require './db.php';
    $page = $_GET['page'];
    $limit = 5;
    $page = ($page - 1) * $limit;
    $sql = "SELECT * FROM `categories` LIMIT $page, $limit ";
     $result = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));