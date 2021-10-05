<?php
namespace model\registration;

use controller\connect\DatabaseConnect\DatabaseConnect;

class Regist_querySQL extends DatabaseConnect
{


    public function registration($username, $age, $email, $password)
    {
        self::$conn;
        if (isset($this->conn)) {
            $this->conn->query("INSERT INTO `users`(`id`, `username`, `age`, `email`, `password`) VALUES ('',$username,$age,$email,$password)");
        }else{
            echo "Error";
        }
    }
}

$reg = new Regist_querySQL();

$reg->registration('xzfcasdc','20','egra@gmail.com', 'IJhiuhiuhui');