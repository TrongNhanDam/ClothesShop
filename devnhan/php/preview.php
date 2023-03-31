
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/widgets.css">
    <link rel="stylesheet" href="../css/preview.css">
</head>

<body>
    <div class="container-fluid">
        <?php require __DIR__ . '/../widgets/header.php';
        include_once "../classes/product.php";
        if ($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['productId'] != "") {
            $productId = $_GET['productId'];
            $product = new Product();
            $productItem = $product->getShowProductById($productId);
        ?>
            <h1 class="col-md-12 text-center my-5">Product Details</h1>
            <h1 class="d-none productId"><?php echo $productItem['productId'] ?></h1>
            <h1 class="d-none productImg"><?php echo $productItem['productImg'] ?></h1>
            <div class="row container__content">
                <div class="col-md-6 container__slide">
                    <div class="main">
                        <span class="control prev">
                            <i class="bx bx-chevron-left"></i>
                        </span>
                        <span class="control next">
                            <i class="bx bx-chevron-right"></i>
                        </span>
                        <div class="img-wrap">
                            <img class="img-wrap-item" src="../admin/upload/<?php echo $productItem['productImg'] ?>" />
                        </div>
                    </div>
                    <?php ?>
                    <div class="list-img">
                        <div class="list-img-item">
                            <img class="list-img-item-img" src="../admin/upload/<?php echo $productItem['productImg'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 container__info">
                    <h3 class="container__info__title"><?php echo $productItem['productName'] ?></h3>
                    <input type="Number" disabled value="<?php echo $productItem['productPrice'] ?>" class="container__info__price my-3 text-center fw-bold">
                    <p class="container__info__des"><?php echo $productItem['productDes'] ?></p>
                    <div class="container__info__choose row">
                        <div class="col-md-6">
                            <label for="size" class=" mb-3">Size</label>
                            <select id="size" name="size" class="form-control size">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="container__info__btn mt-4">
                        <button class="container__info__btn__item btn-cart btn btn-dark px-4">Add to cart</button>
                    </div>
                </div>
            </div>
            <?php require __DIR__ . '/../widgets/footer.php'; ?>
        <?php } ?>
    </div>

</body>
<script src="../js/toggleHeader.js"></script>
<script src="../js/PreviewSlider.js"></script>
<script src="../js/cart.js"></script>
<script>
    const btn_buy = document.querySelector('.btn-cart');
    btn_buy.addEventListener('click', (e) => {
        const name = document.querySelector(".container__info__title").innerText;
        const img = document.querySelector(".productImg").innerText;
        const id = document.querySelector(".productId").innerText
        const price = document.querySelector(".container__info__price").value;
        const size = document.querySelector(".size").value;
        swal({
                title: "Tuyệt vời!",
                text: `Bạn đã thêm ${name} size ${size} sản phẩm vào giỏ hàng!`,
                icon: "success",
            })
            .then((value) => {
                loadShopingCart(id, name, price, img, size)
            });
    })
</script>

</html>