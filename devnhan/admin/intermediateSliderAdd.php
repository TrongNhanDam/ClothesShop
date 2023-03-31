<?php
include_once "../classes/slider.php";
$slider = new slider();
$insertSlider = $slider->insert_slider($_FILES['slider']['name']);
move_uploaded_file($_FILES["slider"]["tmp_name"], "upload/" . $_FILES['slider']['name']);
if ($insertSlider) {
    echo $_FILES['slider']['name'];
}
echo 0;
