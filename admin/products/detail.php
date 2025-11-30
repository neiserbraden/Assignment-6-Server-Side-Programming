<?php
require_once "products.php";

$id = $_GET['id'] ?? null;
$product = get_product($id);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<body>
<?php if (!$product): ?>
    <p>Product not found.</p>
    <a href="index.php">Back</a>
<?php else: ?>
    <h1><?= htmlspecialchars($product['title']) ?></h1>

    <p><strong>Description:</strong><br>
        <?= nl2br(htmlspecialchars($product['description'])) ?>
    </p>

    <p><strong>Icon:</strong> <?= htmlspecialchars($product['icon']) ?></p>

    <hr>
    <a href="edit.php?id=<?= $id ?>">Edit</a> |
    <a href="delete.php?id=<?= $id ?>">Delete</a> |
    <a href="index.php">Back to list</a>
<?php endif; ?>
</body>
</html>
