<?php

$limit_sql = 'SELECT * FROM `table_limit`';
$result_for_limit = mysqli_query($conn, $limit_sql);
$limit = mysqli_fetch_all($result_for_limit, MYSQLI_ASSOC);
$limit_num = $limit[0]['limit_num'];
