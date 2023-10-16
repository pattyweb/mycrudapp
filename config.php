<?php
class Database {
    private $host = "localhost";
    private $username = "your_username";
    private $password = "your_password";
    private $database = "your_database";
    private $connection;

    public function __construct() {
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

?>
