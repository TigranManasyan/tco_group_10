<?php
    $db = parse_ini_file('config.ini');


    class Connection
    {
        protected $conn;
        public function connect()
        {
            global $db;
            $host = $db['DB_HOST'];
            $name = $db['DB_NAME'];
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            try {
                $this->conn = new PDO(
                    "mysql:host=$host;dbname=$name",
                    $db['DB_USER'],
                    $db['DB_PASSWORD'],
                    $options);
                return $this->conn;

            } catch(PDOException $error) {
                echo 'Fail! ' . $error->getMessage();
            }
        }

    }

    $conn = new Connection();
    $conn->connect();