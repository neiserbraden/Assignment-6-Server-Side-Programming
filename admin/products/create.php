<?php
require_once "../classes/productmanager.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p = new Product($_POST['title'], $_POST['description'], $_POST['icon']);
    ProductManager::create($p);
    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <label>Title</label>
    <input name="title" required>

    <label>Description</label>
    <textarea name="description" required></textarea>

    <label>Icon</label>
    <input name="icon" value="layers">

    <button type="submit">Create</button>
</form>

