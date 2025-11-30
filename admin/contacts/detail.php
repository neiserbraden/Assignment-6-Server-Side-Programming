<?php
require 'contacts.php';
$item = contacts_get($_GET['id']);
?>

<h1>Contact Request</h1>

<p>Name: <?= htmlspecialchars($item['name']) ?></p>
<p>Email: <?= htmlspecialchars($item['email']) ?></p>
<p>Subject: <?= htmlspecialchars($item['name']) ?></p>
<p>Message: <?= htmlspecialchars($item['email']) ?></p>


<a href="index.php">Back</a>
