<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text">
    <button type="submit">Insert</button>
</form>
</body>
</html>



<?php
class Category {
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';
    private const DB_NAME = 'db_name';
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );

        if(!$this->conn) {
            echo 'Fail! - ' . mysqli_connect_error($this->conn);
        }
    }
    public function select_category($category)
    {
        $sql = "SELECT * FROM `$category`";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function insert_category($category)
    {
        if (isset($_POST['category_name'])) {
            $category = $_POST['category_name'];
            $sql = "INSERT INTO `category` (`category_name`) VALUES ('$category')";
            mysqli_query($this->conn, $sql);
        }
    }
    public function update_category($category)
    {
        $sql = "UPDATE `category` SET `id` = '' ,`category_name`='$category' WHERE `id` = 1";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function delete_category($category)
    {
        $sql = "DELETE FROM `category` WHERE `id` = '$category'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}


//$db = New Category();
//echo '<pre>';
//    print_r($db->select_category('category'));
//echo '</pre>';

$db = New Category();
$db->insert_category('Notebooks');

