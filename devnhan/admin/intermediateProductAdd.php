<?php
include_once '../classes/product.php';
$pro = new Product();
$productName = $_POST['productName'];
$cateSelect = $_POST['cateSelect'];
$productDes = $_POST['productDes'];
$productPrice = $_POST['productPrice'];
$productSizeS = $_POST['productSizeS'];
$productSizeM = $_POST['productSizeM'];
$productSizeL = $_POST['productSizeL'];
$productSizeXL = $_POST['productSizeXL'];
$productQuanityAnother = $_POST['productQuanityAnother'];

$insert = $pro->insert_product(
    $productName,
    $cateSelect,
    $productDes,
    $productPrice,
    $productSizeS,
    $productSizeM,
    $productSizeL,
    $productSizeXL,
    $productQuanityAnother,
    $_FILES['file']['name']
);

move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES['file']['name']);
if ($insert) {
    echo true;
} else echo 0;
