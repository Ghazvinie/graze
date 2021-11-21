<?php

class DBConnect{
    // Database parameters
    private $host = 'database';
    private $user = 'root';
    private $password = 'password';
    private $dbName = 'graze';
    private $connection;

    // Connect to database
    protected function connectToDB(){
        $this->connection = null;

        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", "$this->user", "$this->password");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error) {
            echo 'Error Connecting to DB: ' . $error->getMessage();
        }; 

        return $this->connection;
    }
};
?>