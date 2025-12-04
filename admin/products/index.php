<?php
require_once "../classes/ProductManager.php";
$products = productmanager::getAll();
?>
<h1>Products</h1>

<a href="create.php">Add New Product</a>
<hr>

<ul>
<?php foreach ($products as $id => $p): ?>
    <li>
        <strong><?= htmlspecialchars($p['title']) ?></strong>
        <a href="view.php?id=<?= $id ?>">View</a>
        <a href="edit.php?id=<?= $id ?>">Edit</a>
        <a href="delete.php?id=<?= $id ?>">Delete</a>
    </li>
<?php endforeach; ?>
</ul>
