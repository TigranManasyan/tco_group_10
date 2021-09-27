<?php

class Db  {
    protected $conn;
    protected function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'edu');
//
    }
    public function select() {
        $sql = 'SELECT * FROM `users`';
        $this->connect();
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}