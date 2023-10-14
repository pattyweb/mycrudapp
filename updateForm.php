<?php
include_once "config.php";
include_once "itemController.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $item = $itemModel1->getItemById($id); // Assuming you have an itemController object
    
    if ($item) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
    <link rel="stylesheet" href="views/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Update Item</h1>

        <div class="row mt-4">
            <div class="col-md-4">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                    <div class="mb-3">
                        <input type="text" name="name" value="<?php echo $item["name"]; ?>" class="form-control" placeholder="Item Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" value="<?php echo $item["description"]; ?>" class="form-control" placeholder="Item Description" >
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
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

