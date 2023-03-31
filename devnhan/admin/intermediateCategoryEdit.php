<?php
include_once __DIR__ . '/../classes/category.php';
$_POST = json_decode(array_keys($_POST)[0], true);
$idCateNumber = $_POST['idCateNumber'];
$newCate = $_POST['newCate'];
$newFormatCate = str_replace("_", " ", $newCate);
$category = new category();
$update_category = $category->update_category($newFormatCate, $idCateNumber);
if ($update_category)
    echo true;
else echo 0;
