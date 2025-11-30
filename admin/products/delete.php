<?php
require_once "products.php";

$id = $_GET['id'] ?? null;
$product = get_product($id);

if (!$product) {
    die("Product not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    delete_product($id);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>
<h1>Delete Product</h1>

<p>Are you sure you want to delete <strong><?= htmlspecialchars($product['title']) ?></strong>?</p>

<form method="post">
    <button type="submit">Yes, delete</button>
</form>

<br>
<a href="view.php?id=<?= $id ?>">Cancel</a>
</body>
</html>
