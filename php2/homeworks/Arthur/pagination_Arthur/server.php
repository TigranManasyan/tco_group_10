<?php
    require './db.php';
    require './new.php';
    $page = 1;
        if(isset($_GET['page']) && $_GET['page'] > 0) {
            $page = $_GET['page'];
        }


    $page = ($page - 1) * $limit_num;
    $sql = "SELECT * FROM `categories` LIMIT $page, $limit_num ";
     $result = mysqli_query($conn, $sql) ;
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));

?>

