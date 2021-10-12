<?php
    require './db.php';
    $page = $_GET['page'];
    $limit = $_POST['count_of_pages'];
    $page = ($page - 1) * $limit;
    $sql = "SELECT * FROM `users` LIMIT $page, $limit ";
    $result = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
