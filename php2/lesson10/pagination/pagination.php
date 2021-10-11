<?php
    require './db.php';
    $sql = 'SELECT * FROM `categories`';
    $result = mysqli_query($conn, $sql);
    $count_posts = mysqli_num_rows($result);
    $limit = 5;
    $count_pages = ($count_posts/$limit);
    echo ceil($count_pages);

