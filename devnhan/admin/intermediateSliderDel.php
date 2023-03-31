<?php 
include_once "../classes/slider.php";
$slider = new slider();
$_POST = json_decode(array_keys($_POST)[0],true);
$sliderId = $_POST['idSliderNumber'];
$del_slider = $slider->del_slider($sliderId);
if ($del_slider){
    echo $sliderId ;
    exit;
}
echo 0;
