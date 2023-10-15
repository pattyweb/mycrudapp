<?php
// Include necessary files
include_once "config.php";
include_once "itemController.php";

// Initialize the item controller
$itemController = new ItemModel($connection);

function route($path, $itemController) {
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

