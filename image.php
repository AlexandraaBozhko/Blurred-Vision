<?php


$db = new Database();

$id = !empty($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id)) {
    die;
}

$image = $db->getImageById($id);

if (empty($image)) {
    die;
}


echo '<img src="data:image/png;base64,'.base64_encode($image).'" width="936" height="625"/>';