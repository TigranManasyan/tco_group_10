<?php
//    include './../../database/DB.php';
    class Book {
        protected $conn;
        protected array $response = [];

        public function connect() {
            return mysqli_connect('localhost', 'root', '', 'edu');
        }

//        public function __construct() {
//            $db = new DB();
//            $this->conn = $db->connect();
//        }

        public function get() {
            $sql = "SELECT * FROM `books`";
            $books = mysqli_query($this->connect(), $sql);
            $response = [
                'msg' => 'all books',
                'data' => mysqli_fetch_all($books, MYSQLI_ASSOC)
            ];

            if(count($response) > 0) {
                return json_encode($response);
            }
        }

        public function filteredBooks($value) {
            $sql = "SELECT * FROM `books` WHERE `name` LIKE '%$value%'";
            $books = mysqli_query($this->connect(), $sql);
            $response = [
                'msg' => 'all books',
                'data' => mysqli_fetch_all($books, MYSQLI_ASSOC)
            ];
            if(count($response) > 0) {
                return json_encode($response);
            }
        }

        public function delete($id) {
            $sql = "DELETE FROM `books` WHERE `id` = $id";
            $books = mysqli_query($this->connect(), $sql);
            $response = [
                'msg' => 'Row successfully deleted',
                'data' => []
            ];
            if(count($response) > 0) {
                return json_encode($response);
            }
        }
    public function update($id, $name, $author) {
        $sql = "UPDATE 
                    `books` 
                SET 
                    `name` = '$name', `author`='$author' 
                WHERE `id` = $id";
        $books = mysqli_query($this->connect(), $sql);
        $response = [
            'msg' => 'Row successfully updated',
            'data' => []
        ];
        if(count($response) > 0) {
            return json_encode($response);
        }
    }
        public function create($name, $author) {
            $sql = "INSERT INTO `books` (`name`, `author`) VALUES ('$name', '$author')";
            $books = mysqli_query($this->connect(), $sql);
            $response = [
                'msg' => 'Book ' . $name . ' successfully created',
                'data' => []
            ];
            if(count($response) > 0) {
                return json_encode($response);
            }
        }
    }