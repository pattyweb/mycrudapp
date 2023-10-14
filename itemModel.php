<?php
class ItemModel {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function createItem($name, $description) {
        // Validate input
        $name = $this->validateInput($name);
        $description = $this->validateInput($description);

        $sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";
        return $this->conn->query($sql);
    }

    public function validateInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function getItems() {
        $sql = "SELECT * FROM items";
        return $this->conn->query($sql);
    }

    function getItemById($id) {
        $sql = "SELECT * FROM items WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    function updateItem($id, $name, $description) {
        $sql = "UPDATE items SET name = '$name', description = '$description' WHERE id = $id";
        return $this->conn->query($sql);
    }

    function deleteItem($id) {
        $sql = "DELETE FROM items WHERE id = $id";
        return $this->conn->query($sql);
    }
}
?>
