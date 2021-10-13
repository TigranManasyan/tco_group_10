<?php
    require './db.php';
    if(isset($_POST['limit']) && $_POST['limit'] >= 5) {
        $limit = $_POST['limit'];
        mysqli_query($conn, "UPDATE `table_limit` SET `limit_num` = '$limit' WHERE `id` = 1");
    }