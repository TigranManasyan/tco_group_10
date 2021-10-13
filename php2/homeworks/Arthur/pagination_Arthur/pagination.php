<?php
    require './db.php';
    require './new.php';

    $sql = 'SELECT * FROM `categories`';
    $result = mysqli_query($conn, $sql);
    $count_posts = mysqli_num_rows($result);
    $count_pages = ($count_posts/$limit_num);
    echo ceil($count_pages);

