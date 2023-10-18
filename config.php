<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct() {
        $this->host = getenv('DB_HOST');
        $this->username = getenv('DB_USER');     // Update to use DB_USER
        $this->password = getenv('DB_PASSWORD'); // Update to use DB_PASSWORD
        $this->database = getenv('DB_NAME');     // Update to use DB_NAME

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

$database = new Database();
$connection = $database->getConnection();
