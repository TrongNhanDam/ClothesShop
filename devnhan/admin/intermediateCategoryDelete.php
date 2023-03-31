<?php
include_once __DIR__ . '/../classes/category.php';
$_POST = json_decode(array_keys($_POST)[0], true);
$idCateNumber = $_POST['idCateNumber'];
$category = new category();
$del_category = $category->del_category($idCateNumber);
if ($del_category)
    echo true;
else echo 0;
