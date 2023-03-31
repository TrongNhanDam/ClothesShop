
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Aos   -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/widgets.css">
    <link rel="stylesheet" href="../css/tab.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/tab-responsive.css">
    <!-- link another -->
</head>

<body>
    <div class="container-fluid">
        <?php
        require '../widgets/header.php';
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/slide1.png" class="d-block w-100" alt="...">
                </div>
                <?php
                include_once "../classes/slider.php";
                $slider = new slider();
                $showSlider = $slider->list_slider();
                if ($showSlider) {
                    foreach ($showSlider as $item) {
                ?>
                        <div class="carousel-item">
                            <img src="../admin/upload/<?php echo $item['sliderImg'] ?>" class="d-block w-100" alt="...">
                        </div>
                <?php  }
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container__tabs">
            <!-- Tab items -->
            <div class="container__tabs__item">
                <div class="container__tabs__item__nav active">
                    <i class='bx bx-sun'></i>
                    Thanh lịch
                </div>
                <div class="container__tabs__item__nav">
                    <i class='bx bx-briefcase-alt-2'></i>
                    Mặc hàng ngày
                </div>
                <div class="container__tabs__item__nav">
                    <i class='bx bx-football'></i>
                    Thể thao
                </div>
                <div class="container__tabs__item__line"></div>
            </div>
            <!-- Tab content -->
            <div class="container__tabs__content">
                <div class="container__tabs__content__pane active">
                    <!-- product -->
                    <?php
                    include_once "../classes/product.php";
                    $indexPro = new Product();
                    $pro = $indexPro->listProductCateId("131");
                    if ($pro) {
                        foreach ($pro as $item) {
                    ?>
                            <div class="container__tabs__content__pane__product">
                                <div class="container__tabs__content__pane__product__img">
                                    <img src="../admin/upload/<?php echo $item['productImg']; ?>" alt="" class="container__tabs__content__pane__product__img__item">
                                </div>
                                <div class="container__tabs__content__pane__product__info">
                                    <p class="container__tabs__content__pane__product__info__title">
                                        <?php echo $item['productName']; ?>
                                    </p>
                                    <div class="container__tabs__content__pane__product__info__price">
                                        <p class="container__tabs__content__pane__product__info__price__money">
                                            <?php echo $item['productPrice']; ?>
                                        </p>
                                        <!-- <p class="container__tabs__content__pane__product__info__price__saleoff">
                                    <del>


                                    </del>
                                </p>
                                <p class="container__tabs__content__pane__product__info__price__percent">


                                </p> -->
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="container__tabs__content__pane">
                    <?php
                    include_once "../classes/product.php";
                    $indexPro = new Product();
                    $pro = $indexPro->listProductCateId("123");
                    if ($pro) {
                        foreach ($pro as $item) {
                    ?>
                            <div class="container__tabs__content__pane__product">
                                <div class="container__tabs__content__pane__product__img">
                                    <img src="../admin/upload/<?php echo $item['productImg']; ?>" alt="" class="container__tabs__content__pane__product__img__item">
                                </div>
                                <div class="container__tabs__content__pane__product__info">
                                    <p class="container__tabs__content__pane__product__info__title">
                                        <?php echo $item['productName']; ?>
                                    </p>
                                    <div class="container__tabs__content__pane__product__info__price">
                                        <p class="container__tabs__content__pane__product__info__price__money">
                                            <?php echo $item['productPrice']; ?>
                                        </p>
                                        <!-- <p class="container__tabs__content__pane__product__info__price__saleoff">
                                    <del>


                                    </del>
                                </p>
                                <p class="container__tabs__content__pane__product__info__price__percent">


                                </p> -->
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="container__tabs__content__pane">
                <?php
                include_once "../classes/product.php";
                $indexPro = new Product();
                $pro = $indexPro->listProductCateId("136");
                if ($pro) {
                    foreach ($pro as $item) {
                ?>
                        <div class="container__tabs__content__pane__product">
                            <div class="container__tabs__content__pane__product__img">
                                <img src="../admin/upload/<?php echo $item['productImg']; ?>" alt="" class="container__tabs__content__pane__product__img__item">
                            </div>
                            <div class="container__tabs__content__pane__product__info">
                                <p class="container__tabs__content__pane__product__info__title">
                                    <?php echo $item['productName']; ?>
                                </p>
                                <div class="container__tabs__content__pane__product__info__price">
                                    <p class="container__tabs__content__pane__product__info__price__money">
                                        <?php echo $item['productPrice']; ?>
                                    </p>
                                    <!-- <p class="container__tabs__content__pane__product__info__price__saleoff">
                                    <del>


                                    </del>
                                </p>
                                <p class="container__tabs__content__pane__product__info__price__percent">


                                </p> -->
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    </div>
    <div class="container__about">
        <div class="container__about__img">
            <img src="../img/about__jeansV2.jpg" alt="" class="container__about__img__item">
        </div>
        <div class="container__about__info">
            <h1 class="container__about__info__h">
                CLEAN DENIM
            </h1>
            <p class="container__about__info__p">
                Một chiếc quần Jeans đầu tiên của nhà DEV được sử dụng chất liệu là Cotton Tái sinh (Regenerative Cotton) - loại Cotton chất lượng và trồng bằng quy trình sạch, bền vững. Chiếc quần với vải Denim được dệt toàn bộ tại nhà máy Nhơn Trạch, Đồng Nai của Saitex - nhà máy với nhiều trang máy móc, thiết bị hiện đại với quy trình sản xuất khép kín, giảm thiểu CO2 và nước thải ra môi trường.
            </p>
            <a href="" class="container__about__info__btn btn btn-dark">
                Tìm hiểu thêm
            </a>
        </div>
    </div>
    <div class="container__about container__about__brown">
        <div class="container__about__info">
            <h1 class="container__about__info__h">
                Dòng sản phẩm công nghệ EXCOOL
            </h1>
            <p class="container__about__info__p">
                Công nghệ Việt cho người Việt.
                Với hơn 100.000 sản phẩm đã được gửi đến tay khách hàng sử dụng và hài lòng
            </p>
            <a href="" class="container__about__info__btn btn btn-dark">
                Tìm hiểu thêm
            </a>
        </div>
        <div class="container__about__img">
            <img src="../img/about__excoolV2.jpg" alt="" class="container__about__img__item">
        </div>
    </div>
    <div class="container__clothesmini">
        <h1 class="container__clothesmini__h">
            Basics
        </h1>
        <div class="container__clothesmini__clothes">
            <img src="../img/mini.png" alt="" class="container__clothesmini__clothes__item close">
            <img src="../img/mini2.png" alt="" class="container__clothesmini__clothes__item close">
            <img src="../img/mini3.png" alt="" class="container__clothesmini__clothes__item close">
            <img src="../img/mini4.png" alt="" class="container__clothesmini__clothes__item close">

        </div>
        <p class="container__clothesmini__p">
            Dòng sản phảm mặc cơ bản chất lượng tốt và giá rẻ của Coolmate
        </p>
        <a href="" class="btn btn-warning">Trải nghiệm</a>
    </div>
    <div class="container__linkimg">
        <div class="container__linkimg__parent">
            <div class="container__linkimg__parent__item">
                <img src="../img/home.jpg" alt="" class="container__linkimg__parent__item__img">
                <a href="" class=" btn--white container__linkimg__parent__item__btn">Mặc hàng ngày</a>
            </div>
        </div>
        <div class="container__linkimg__parent">
            <div class="container__linkimg__parent__item">
                <img src="../img/sport.jpg" alt="" class="container__linkimg__parent__item__img">
                <a href="" class=" btn--white container__linkimg__parent__item__btn">Đồ thể thao</a>
            </div>
        </div>
        <div class="container__linkimg__parent">
            <div class="container__linkimg__parent__item">
                <img src="../img/all.jpg" alt="" class="container__linkimg__parent__item__img">
                <a href="" class="btn--white container__linkimg__parent__item__btn">Tất cả</a>
            </div>
        </div>
    </div>
    <div class="container__service">
        <div class="container__service__item">
            <img src="../img/service.jpg" alt="" class="container__service__item__img">

        </div>
        <div class="container__service__item">
            <img src="../img/thank.jpg" alt="" class="container__service__item__img">
            <div class="container__service__item__jumbo">
                Cảm ơn đã lựa chọn chúng tôi
            </div>
        </div>
    </div>
    <?php
    require __DIR__ . '/../widgets/backtotop.php';
    require '../widgets/footer.php';
    ?>
    </div>
</body>
<script src="../js/animationOpen.js"></script>
<script src="../js/tabIndex.js"></script>
<script src="../js/toggleHeader.js"></script>

</html>