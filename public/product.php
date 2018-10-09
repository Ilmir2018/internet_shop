<?php
header("Content-type: text/html; charset=utf-8");
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'autoload.php';

$id = $_GET['id'];
$product = getProductById($id);
$images = getProductImages($id);
render("product", ['product' => $product, 'images' => $images]);
