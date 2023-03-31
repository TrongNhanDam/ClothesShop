<?php
include_once __DIR__ . '/../classes/slider.php';
$slider = new slider();
$showSlider = $slider->list_slider();
?>
<div data-id="slider-list" class="container__body__content slider-list tab-content">
    <div class="container__body__content__title">
        <p class="container__body__content__title__p">
            Slider list
        </p>
    </div>
    <div class='container__body__content__content'>
        <table>
            <thead>
                <tr>
                    <th class="cate-th">ID</th>
                    <th class="cate-th">Slider</th>
                    <th class="cate-th">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!$showSlider) {
                    echo "<h3 class=' bg-warning p-2 rounded mb-3'>List slider trống!</h3>";
                } else
                    foreach ($showSlider as $Item) {
                ?>
                    <tr class="slider-item">
                        <td class="sliderId cate-td">
                            <?php
                            echo $Item['sliderId'];
                            ?>
                        </td>
                        <td class="cate-td">
                            <img class="slider-img" src="../admin/upload/<?php echo  $Item['sliderImg']; ?>" alt="">
                        </td>
                        <td class="cate-td">
                            <button class="btn btn-danger btn-del-slider">Delete</button>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>