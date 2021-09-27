<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form{
        width: 200px;
        height: 200px;
        display: flex;
        flex-direction: column;
        padding: 10px;
        align-items: center;

    }
    input{
        margin: 10px;
    }
    button{
        width: 120px;
    }
</style>
<body>
<form action="index.php" method="post">
    <input type="text" name="t_name" placeholder="Table_name">
    <input type="text" name="name" placeholder="Prod_name">
    <input type="number" name="price" placeholder="Price">
    <input type="number" name="quantity" placeholder="Quantity">
    <button type="submit">Insert</button>
</form>

</body>
</html>
<?php

class Category
{
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';
    private const DB_NAME = 'shop';
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );

        if (!$this->conn) {
            echo 'Fail! ~ ' . mysqli_connect_error($this->conn);
        }
    }

    public function select_categories($table_name)
    {
        $sql = "SELECT * FROM $table_name";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function insert_products($t_name,$name,$price,$quantity)
    {
        $sql = "INSERT INTO `$t_name`(`id`, `prod_name`, `price`, `quantity`) VALUES ('','$name','$price','$quantity')";
        mysqli_query($this->conn, $sql);

    }

    public function update_products($id,$prod_name,$price,$quantity)
    {
        $sql = "UPDATE `prodocts` SET `prod_name` ='$prod_name',`price` ='$price',`quantity` ='$quantity' WHERE `id`='$id'";
        mysqli_query($this->conn, $sql);

    }

    public function delete_products($tabel_name,$id)
    {
        $sql = "DELETE FROM `$tabel_name` WHERE `$tabel_name`.`id` = $id";
        mysqli_query($this->conn, $sql);

    }

}
$db = new Category();
$table_name = $_POST['t_name'];
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];




$db->insert_products($table_name,$name,$price,$quantity);

$db->update_products(7,'phone',55000,12);

$db->delete_products('prodocts',5);

echo '<pre>';
    print_r($db->select_categories('prodocts'));
echo '</pre>';
