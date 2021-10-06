<?php
namespace controller\connect\DatabaseConnect;

use PDO;
use PDOException;

class DatabaseConnect
{
    protected $conn;
    public function __construct()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->conn = new PDO(
                "mysql:host=localhost;dbname=edu",
                'root',
                '',
                $options);

        } catch (PDOException $error) {
            echo 'Fail! ~ ' . $error->getMessage();
        }

    }


    public function getUsername(){
        echo '<pre>';
        $getUserName = $this->conn->query('SELECT * FROM `users`')->fetch();
        echo $getUserName['username'];
        echo '</pre>';
    }
}
$con = new DatabaseConnect();

?>