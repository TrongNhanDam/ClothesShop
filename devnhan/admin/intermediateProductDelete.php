<?php
include_once __DIR__ . '/../classes/product.php';
$_POST = json_decode(array_keys($_POST)[0], true);
$productId = $_POST['productId'];
$product = new Product();
$del_product = $product->product_del($productId);
if ($del_product)
    echo true;
else echo 0;
