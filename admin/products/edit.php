<?php
require_once "../classes/productmanager.php";

$id = $_GET['id'];
$product = ProductManager::get($id);

if (!$product) die("Not found");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p = new Product($_POST['title'], $_POST['description'], $_POST['icon']);
    ProductManager::update($id, $p);
    header("Location: view.php?id=$id");
    exit;
}
?>
<form method="post">
    <label>Title</label>
    <input name="title" value="<?= htmlspecialchars($product['title']) ?>">

    <label>Description</label>
    <textarea name="description"><?= htmlspecialchars($product['description']) ?></textarea>

    <label>Icon</label>
    <input name="icon" value="<?= htmlspecialchars($product['icon']) ?>">

    <button>Save</button>
</form>

