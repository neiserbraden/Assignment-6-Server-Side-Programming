<?php
require 'contacts.php';
$items = contacts_get_all();
?>

<h1>Contact Requests</h1>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>

    <?php foreach ($items as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= htmlspecialchars($item['email']) ?></td>
            <td><?= htmlspecialchars($item['created_at']) ?></td>
            <td>
                <a href="detail.php?id=<?= $item['id'] ?>">View</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
