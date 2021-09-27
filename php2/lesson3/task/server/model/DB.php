<?php
class DB {
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';
    private const DB_NAME = 'edu';
    public function connection()
    {
        return mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );
    }
}