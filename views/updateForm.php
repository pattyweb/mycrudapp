<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Move up one directory to reach the root directory

// The rest of your HTML code remains the same.

// Include the router
//include_once "../router.php";

// You don't need the controller instantiation here as it's handled in the router
$database = new Database();
$connection = $database->getConnection();

$itemController = new ItemModel($connection);

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $item = $itemController->getItemById($id); // Assuming you have an itemController object (handled by the router)

    if ($item) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Update Item</title>
            <link rel="stylesheet" href="bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1 class="mt-4">Update Item</h1>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <form method="post" action="updateForm.php?id=<?php echo $item["id"]; ?>"> <!-- Use the router path here -->
                            <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                            <div class="mb-3">
                                <input type="text" name="name" value="<?php echo $item["name"]; ?>" class="form-control" placeholder="Item Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="description" value="<?php echo $item["description"]; ?>" class="form-control" placeholder="Item Description" >
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                        <a href="/mycrudapp">Go back to the homepage</a>
                    </div>
                </div>
            </div>

            <script src="../js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
    } else {
        echo "Item not found.";
    }
} else {
    echo "Item ID not provided.";
}
?>
