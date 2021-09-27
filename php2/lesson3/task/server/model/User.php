<?php
    require 'DB.php';
    session_start();
class User {
    protected $conn;
    public function __construct()
    {
        $db = new DB();
        $this->conn = $db->connection();
    }

    private function emailUnique($email) {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    private function hashPassword($password) {
          return base64_encode($password);
    }

    public function login($email, $password) {
        $password = $this->hashPassword($password);
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return true;
        } else {
            return false;
        }

    }

    public function register($full_name, $age, $email, $password) {
        if($this->emailUnique($email)) {
            $_SESSION['msg'] = 'Login please!';
            header('location:../../index.php');
            die;

        } else {
            $password = $this->hashPassword($password);
            $sql = "
                        INSERT INTO `users` 
                            (`fullname`, `age`, `email`, `password`) 
                            VALUES 
                            ('$full_name', '$age', '$email', '$password')";
            $result = mysqli_query($this->conn, $sql);
            if($result) {
                $_SESSION['msg'] = 'Account successfully created!';
                header('location:../../index.php');
                die;
            }
        }
    }
}