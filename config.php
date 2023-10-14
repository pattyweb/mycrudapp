<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
