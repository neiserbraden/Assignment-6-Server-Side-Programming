<?php


function contacts_get($id) {
    $items = contacts_load();
    foreach ($items as $item) {
        if ($item["id"] == $id) return $item;
    }
    return null;
}

function contacts_create($data) {
    $items = contacts_load();

    
    $nextId = empty($items) ? 1 : max(array_column($items, "id")) + 1;

    $newItem = [
        "id" => $nextId,
        "name" => $data["name"],
        "email" => $data["email"],
        "message" => $data["message"],
        "created_at" => date("Y-m-d H:i:s")
    ];

    $items[] = $newItem;
    contacts_save($items);

    return $nextId;
}
?>
