<?php
require "./../server/Db.php";

class Controller
{
    protected $conn;

    public function __construct()
    {
        $db = new Db();
        $this->conn = $db->connect();
    }

    public function insertPost($name, $email, $password, $age)
    {
        $year = 31536000;
        $newAge = (strtotime("now") - strtotime($_POST['age']))/$year;
        $result = (int)$newAge;

        $sql = "INSERT INTO `regTable`(`name`, `email`, `password`, `age`) 
                                            VALUES 
                                            ('$name','$email','$password','$result')";
        $query = $this->conn->prepare($sql);
        $query->execute();

    }
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];

$obj = new Controller();
$obj->insertPost($name, $email, $password, $age);
header("location:./../index.php");
