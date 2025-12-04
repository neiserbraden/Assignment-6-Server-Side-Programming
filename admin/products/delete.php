<?php
require_once "../classes/productmanager.php";

$id = $_GET['id'];
$product = ProductManager::get($id);

if (!$product) die("Not found");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ProductManager::delete($id);
    header("Location: index.php");
    exit;
}
?>
<h1>Delete Product</h1>

<p>Are you sure you want to delete <b><?= $product['title'] ?></b>?</p>

