<?php
require_once "products.php";

$id = $_GET['id'] ?? null;
$product = get_product($id);

if (!$product) {
    die("Product not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    update_product($id, $_POST['title'], $_POST['description'], $_POST['icon']);
    header("Location: view.php?id=$id");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>

<form method="post">
    <label>Title</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($product['title']) ?>" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required><?= htmlspecialchars($product['description']) ?></textarea><br><br>

    <label>Icon</label><br>
    <input type="text" name="icon" value="<?= htmlspecialchars($product['icon']) ?>"><br><br>

    <button type="submit">Save Changes</button>
</form>

<br>
<a href="view.php?id=<?= $id ?>">Cancel</a>
</body>
</html>
