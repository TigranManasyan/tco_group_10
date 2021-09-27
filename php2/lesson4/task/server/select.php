<?php

    require './Db.php';
    $db = new Db();
    echo json_encode($db->select());