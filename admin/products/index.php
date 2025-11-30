<?php
require_once "products.php";
$products = get_all_products();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products Admin</title>
</head>
<body>
    <h1>Products</h1>

    <a href="create.php"> Add New Product</a>
    <hr>

    <?php if (empty($products)) : ?>
        <p>No products found.</p>
    <?php else: ?>
        <ul>
        <?php foreach ($products as $index => $p): ?>
            <li>
                <strong><?= htmlspecialchars($p['title']) ?></strong>
                <br>
                <a href="view.php?id=<?= $index ?>">View</a>
                <a href="edit.php?id=<?= $index ?>">Edit</a> 
                <a href="delete.php?id=<?= $index ?>">Delete</a>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
