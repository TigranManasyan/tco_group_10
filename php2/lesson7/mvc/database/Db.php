<?php
class Db
{
    private $app_configs;
    public function __construct() {
        $this->app_configs = require './configs/app.php';
    }
    public function connection() {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $pdo = new PDO(
                'mysql:host='
                . $this->app_configs['database']['host']
                . ';dbname='
                . $this->app_configs['database']['dbname'],
                $this->app_configs['database']['user'],
                $this->app_configs['database']['password'],
                $options
            );
            return $pdo;
        } catch(PDOException $error) {
            return 'Fail! ~ ' . $error->getMessage();
        }
    }


}