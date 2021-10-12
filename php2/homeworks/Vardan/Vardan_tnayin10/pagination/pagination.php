<?php
    require './db.php';
    $sql = 'SELECT * FROM `users`';
    $result = mysqli_query($conn, $sql);
    $count_posts = mysqli_num_rows($result);
    $limit = $_POST['count_of_pages'];
    $count_pages = ($count_posts/$limit);
    echo ceil($count_pages);

