<?php

function get_all_products() {
    $data = load_services();
    return $data['services'];
}

function get_product($index) {
    $data = load_services();
    return $data['services'][$index] ?? null;
}

function create_product($title, $description, $icon = "layers") {
    $data = load_services();

    $data['services'][] = [
        'title' => $title,
        'description' => $description,
        'icon' => $icon
    ];

    save_services($data);
    return true;
}

function update_product($index, $title, $description, $icon = "layers") {
    $data = load_services();

    if (!isset($data['services'][$index])) {
        return false;
    }

    $data['services'][$index] = [
        'title' => $title,
        'description' => $description,
        'icon' => $icon
    ];

    save_services($data);
    return true;
}

function delete_product($index) {
    $data = load_services();

    if (!isset($data['services'][$index])) {
        return false;
    }

    array_splice($data['services'], $index, 1);

    save_services($data);
    return true;
}
?>
