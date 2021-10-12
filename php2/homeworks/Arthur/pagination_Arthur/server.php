<?php
    require './db.php';
//    require './new.php';
    $page = $_GET['page'];

    $limit =5;
    $limit= $_POST['select'];
//    $page = ($page - 1) * $limit;
    $sql = "SELECT * FROM `categories` LIMIT $page, $limit ";
     $result = mysqli_query($conn, $sql) ;
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));

?>

