<?php
include_once __DIR__ . '/../lib/session.php';
Session::checkSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- link swal  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/index-admin-product-edit.css">

</head>

<body>

    <div class="container-fluid">
        <div class="container__header">
            <div class="container__header__logo">
                Admin page
            </div>
            <div class="container__header__account">
                <div class="container__header__account__img">
                    <img src="../img/ava.webp" alt="" class="container__header__account__img__item">
                </div>
                <p class="container__header__account__p">
                    Hello
                    <?php
                    echo  Session::get('Name');
                    ?>
                </p>
                <span class="container__header__account__dash"></span>
                <?php
                if (isset($_GET['action']) && ($_GET['action']) == 'logout') {
                    Session::destroy();
                }
                ?>
                <a href="?action=logout" class="container__header__account__logout">Log out</a>
            </div>
        </div>

        <div class="container__body__content">
            <div class="container__body__content__title">
                <p class="container__body__content__title__p">
                    Edit Product
                </p>
            </div>
            <div class='container__body__content__content'>
                <div class="product">
                    <form action="" enctype="multipart/form-data">
                        <table class="">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['productId'] != '') {
                                $productId = $_GET['productId'];
                                include_once '../classes/product.php';
                                $product = new Product();
                                $showProductById = $product->getShowProductById($productId);
                            ?>
                                <tr>
                                    <td class="pro-td">
                                        <label for="" class="container__body__content__content__label">Id Product</label>
                                    </td>
                                    <td class="pro-td">
                                        <input disabled value="<?php echo $showProductById['productId'] ?>" id="input-id-product-edit" name="" type="text" class="container__body__content__content__input">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="" class="container__body__content__content__label">Name Product</label>
                                    </td>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productName'] ?>" id="input-name-product" name="" type="text" class="container__body__content__content__input" placeholder="Nhập loại tại đây...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label>Category</label>
                                    </td>
                                    <td class="pro-td">
                                        <?php
                                        include_once "../classes/category.php";
                                        $categoryUseForProduct = new category();
                                        $catNameUseForProduct = $categoryUseForProduct->list_category();
                                        $catNameIdPre = $categoryUseForProduct->getCateById($showProductById['catId']);
                                        ?>
                                        <select id="select-cate-product" name="select" class="form-control">
                                            <option disabled>Select Category</option>
                                            <option value="<?php echo $catNameIdPre['catId'] ?>" selected><?php echo $catNameIdPre['catName'] ?></option>
                                            <?php
                                            if ($catNameUseForProduct) {
                                                foreach ($catNameUseForProduct as $item) {
                                            ?>
                                                    <option value="<?php echo $item['catId'] ?>"><?php echo $item['catName']; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pro-td">
                                        <label>Description</label>
                                    </td>
                                    <td class="pro-td">
                                        <textarea id="pro-des" class="pro-des"><?php echo $showProductById['productDes'] ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label>Price</label>
                                    </td>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productPrice'] ?>" id="input-price-product" name="" type="text" class="container__body__content__content__input" placeholder="Nhập giá sản phẩm tại đây...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="size" class=" mb-3">Số lượng Size S (Quần, áo,..)</label>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productSS'] ?>" type="number" min="0" id="sizeS" name="size" class="form-control">
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="size" class=" mb-3">Số lượng Size M (Quần, áo,..)</label>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productSM'] ?>" type="number" min="0" id="sizeM" name="size" class="form-control">
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="size" class=" mb-3">Số lượng Size L (Quần, áo,..)</label>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productSL'] ?>" type="number" min="0" id="sizeL" name="size" class="form-control">
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="size" class=" mb-3">Số lượng Size XL (Quần, áo,..)</label>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productSXL'] ?>" type="number" min="0" id="sizeXL" name="size" class="form-control">
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label for="size" class=" mb-3">Số lượng loại hàng không size (Phụ kiện Accessories) </label>
                                    <td class="pro-td">
                                        <input value="<?php echo $showProductById['productQuantity'] ?>" type="number" min="0" id="quantityAnother" name="size" class="form-control">
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pro-td">
                                        <label>Upload Image</label>
                                    </td>
                                    <td class="pro-td">
                                        <input id="pro-img" type="file" />
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                        <button type="submit" id="btn-editProduct" name="" class="w-100 container__body__content__content__btn btn btn-primary mt-3">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <p class="container__copyright">
            © Copyright 2022 DEV Nhân. All rights reserved. Design by--<a href="#" class="copyright">devnhan.com</a>
        </p>
    </div>
</body>
<script src="../js/handleEditProduct.js"></script>

</html>