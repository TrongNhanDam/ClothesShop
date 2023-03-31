
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/widgets.css">
    <link rel="stylesheet" href="../css/product.css">
</head>

<body>
    <div class="container-fluid">
        <?php
        require __DIR__ . '/../widgets/header.php';
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['cateId'] != "") {
            $cateId = $_GET['cateId'];
            require_once __DIR__ . '/../classes/category.php';
            include_once __DIR__ . "/../classes/product.php";
            $product = new Product();
            $category = new Category();
            $showCateNameById = $category->getCateById($cateId);
            $showProductById = $product->listProductCateId($cateId);
        ?>
            <div class="container__title">
                <?php echo $showCateNameById['catName']; ?>
            </div>
            <div class="container__product">
                <?php
                if ($showProductById) {
                    foreach ($showProductById as $product) {
                ?>
                        <div class="container__product__item">
                            <h1 class="d-none productImg"><?php echo $product['productImg']; ?></h1>
                            <h1 class="d-none productId"><?php echo $product['productId']; ?></h1>
                            <div class="container__product__item__img">
                                <img src="../admin/upload/<?php echo $product['productImg']; ?>" alt="" class="container__product__item__img__item">
                            </div>
                            <div class="container__product__item__info">
                                <p class="container__product__item__info__title">
                                    <?php echo $product['productName']; ?>
                                </p>
                                <div class="container__product__item__info__price">
                                    <p class="container__product__item__info__price__price">
                                        <?php echo $product['productPrice']; ?>
                                    </p>
                                    <p class="container__product__item__info__price__del">
                                        <del>

                                        </del>
                                    </p>
                                    <p class="container__product__item__info__price__saleoff">

                                    </p>
                                </div>
                            </div>
                            <a href="./preview.php?productId=<?php echo $product['productId'] ?>" class="btn btn-cart btn-primary w-100">Xem thông tin</a>
                        </div>
                <?php
                    }
                } else echo "<h1 class='bg-warning py-5 rounded px-5'>Coming soon....</h1>"
                ?>
            </div>
        <?php
        }
        ?>
    </div>
    <?php require __DIR__ . '/../widgets/backtotop.php'; ?>
    <?php require __DIR__ . '/../widgets/footer.php'; ?>

    </div>
</body>
<script src="../js/toggleHeader.js"></script>

</html>