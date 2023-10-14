<?php
include_once "config.php";
include_once "itemModel.php";

$itemModel1 = new ItemModel($connection);

// Retrieve the list of items
$items = $itemModel1->getItems();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["create"])) {
        // Check if "name" and "description" keys exist in $_POST
        if (isset($_POST["name"]) && isset($_POST["description"])) {
            $name = $_POST["name"];
            $description = $_POST["description"];
            
            // Validate input
            $name = $itemModel1->validateInput($name);
            $description = $itemModel1->validateInput($description);
    
            $itemModel1->createItem($name, $description);
            
            // Redirect after creating
            header("Location: index.php");
            exit();
        } else {
            // Handle the case when "name" and "description" are missing in $_POST
            echo "Please provide both 'name' and 'description' in the form.";
        }
    } elseif (isset($_POST["update"])) {
        // Check if "id," "name," and "description" keys exist in $_POST
        if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["description"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $description = $_POST["description"];
            
            // Validate input
            $id = $itemModel1->validateInput($id);
            $name = $itemModel1->validateInput($name);
            $description = $itemModel1->validateInput($description);
    
            $itemModel1->updateItem($id, $name, $description);
            
            // Redirect after updating
            header("Location: index.php");
            exit();
        } else {
            // Handle the case when "id," "name," and "description" are missing in $_POST
            echo "Please 'name' and 'description' in the form.";
        }
    } elseif (isset($_POST["delete"])) {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
    
            // Validate input
            $id = $itemModel1->validateInput($id);
    
            $itemModel1->deleteItem($id);
            
            // Redirect after deleting
            header("Location: index.php");
            exit();
        } else {
            // Handle the case when "id" is missing in $_POST
            echo "Please provide 'id' in the form.";
        }
    }

}

?>

