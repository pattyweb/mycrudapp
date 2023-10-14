function confirmDelete(itemId) {
    if (confirm("Are you sure you want to delete this item?")) {
        // If confirmed, submit the form to perform the deletion
        var deleteForm = document.createElement("form");
        deleteForm.method = "post";
        deleteForm.action = "index.php"; // Replace with the actual URL of your delete action
        var idInput = document.createElement("input");
        idInput.type = "hidden";
        idInput.name = "id";
        idInput.value = itemId;
        var deleteInput = document.createElement("input");
        deleteInput.type = "hidden";
        deleteInput.name = "delete";
        deleteInput.value = "1";
        deleteForm.appendChild(idInput);
        deleteForm.appendChild(deleteInput);
        document.body.appendChild(deleteForm);
        deleteForm.submit();
    }
}