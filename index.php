<?php
include_once "config.php";
include_once "itemController.php";
//$items = $itemModel1->getItems(); // Assuming you have an itemController object
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="views/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">CRUD App</h1>

        <!-- Form to Create/Update Items -->
        <div class="row mt-4">
            <div class="col-md-4">
                <form method="post" class="mb-4">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Item Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" placeholder="Item Description" required>
                    </div>
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

        <!-- Display Existing Items -->
        <div class="row mt-4">
            <?php while ($item = $items->fetch_assoc()) { ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item["name"]; ?></h5>
                            <p class="card-text"><?php echo $item["description"]; ?></p>
                            <form method="post" action="updateForm.php?id=<?php echo $item["id"]; ?>">
                                <input type="hidden" name="id" value="<?php echo $item["id"]; ?>">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $item["id"]; ?>)">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/delete-script.js"></script>
</body>
</html>
