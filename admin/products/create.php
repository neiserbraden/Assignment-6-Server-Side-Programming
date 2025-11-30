<?php
require_once "products.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    create_product($_POST['title'], $_POST['description'], $_POST['icon']);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
<h1>Add New Product</h1>

<form method="post">
    <label>Title</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Icon (default: layers)</label><br>
    <input type="text" name="icon" value="layers"><br><br>

    <button type="submit">Create</button>
</form>

<br>
<a href="index.php">Back</a>
</body>
</html>
