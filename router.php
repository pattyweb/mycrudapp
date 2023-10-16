<?php
require_once __DIR__ . '/vendor/autoload.php';

// Include necessary files (config.php and itemController.php are included automatically by Composer)
// No need to include "config.php" and "itemController.php" explicitly here

// Initialize the item controller (ItemModel class will be autoloaded by Composer)
$database = new Database();
$connection = $database->getConnection();

$itemController = new ItemModel($connection);

function route($path, $itemController) {
    //$items = $itemController->getItems(); // Retrieve the list of items
    if ($path === '/' || $path === '/form') {
        // Display the form
        include "views/form.php";
    } elseif (preg_match('/^\/update-form\/\d+$/', $path)) {
        // Display the update form for a specific item
        include "views/update-form.php";
    } 
}

// Get the current URL path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Call the route function
route($path, $itemController);
?>

