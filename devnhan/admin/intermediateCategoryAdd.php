<?php
include_once __DIR__ . '/../classes/category.php';
$category = new category();
$_POST = json_decode(array_keys($_POST)[0], true);
// $test = json_decode(array_keys($_POST)[1], true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value_input_cate = $_POST['value_input_cate'];
    $format_value_input_cate = str_replace("_", " ", $value_input_cate);
    $insert_category = $category->insert_category($format_value_input_cate);
    if ($insert_category)
        echo true;
    else echo 0;
}
