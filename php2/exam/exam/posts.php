<?php
    include 'DB.php';

class Posts
{
    protected $pdo;
    protected $response = [];
    public function __construct()
    {
        $db = new Db();
        $this->pdo = $db->connection();
    }

    function get()
    {

        $sql = 'SELECT * FROM `posts`';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        if($query) {
            $response = $query->fetchAll();

            return json_encode($response) . "<br>";
        }


    }
}



