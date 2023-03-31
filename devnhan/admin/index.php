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
    <link rel="stylesheet" href="../css/index-admin-repass.css">
    <link rel="stylesheet" href="../css/index-admin-category.css">
    <link rel="stylesheet" href="../css/index-admin-categorylist.css">
    <link rel="stylesheet" href="../css/index-admin-product-add.css">
    <link rel="stylesheet" href="../css/index-admin-product-list.css">
    <link rel="stylesheet" href="../css/index-admin-slider-add.css">
    <link rel="stylesheet" href="../css/index-admin-slider-list.css">
    <link rel="stylesheet" href="../css/index-admin-order-list.css">
    <link rel="stylesheet" href="../css/index-admin-feedback-list.css">
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
        <div class="container__header2">
            <div class="container__header__nav">
                <p data-id="order-list" href="" class="container__header__nav__item item"><i class='nav-icon bx bxs-dashboard'></i>Order</p>
                <p class="container__header__nav__item tab-userprofile item"><i class='nav-icon bx bx-edit'></i>User Profile</p>
                <p data-id="re-pass" href="" class="container__header__nav__item item"><i class='nav-icon bx bx-lock-alt'></i>Change Password</p>
                <p data-id="feedback-list" class="container__header__nav__item item"><i class='nav-icon bx bxs-inbox'></i>Feedback </p>
                <a href="../php/index.php" class="container__header__nav__item item"><i class='nav-icon bx bx-home-alt'></i>Visit website</a>
            </div>
        </div>
        <div class="container__body">
            <div class="container__body__sidebar">
                <div class="card mb-2">
                    <div class="card-header">
                        <p class="btn m-0 p-0 fw-bold " data-bs-toggle="collapse" href="#target1">
                            Slider
                        </p>
                    </div>
                    <p id="target1" data-id="slider-add" class="collapse card-body m-0 item">
                        Add slider
                    </p>
                    <p id="target1" data-id="slider-list" class="collapse card-body m-0 item">
                        List slider
                    </p>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <p class="btn m-0 p-0 fw-bold" data-bs-toggle="collapse" href="#target4">
                            Category Option
                        </p>
                    </div>
                    <p id="target4" data-id="add-category" class="collapse card-body m-0 item">
                        Add Category
                    </p>
                    <p id="target4" data-id="category-list" class="collapse card-body m-0 item">
                        Category List
                    </p>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <p class="btn m-0 p-0 fw-bold" data-bs-toggle="collapse" href="#target5">
                            Product Option
                        </p>
                    </div>
                    <p data-id="product-add" id="target5" class="collapse card-body m-0 item">
                        Add product
                    </p>
                    <p data-id="product-list" id="target5" class="collapse card-body m-0 item">
                        Product List
                    </p>

                </div>
            </div>
            <?php
            require_once  'changepass.php';
            require_once  './categoryadd.php';
            include_once __DIR__ . '/categorylist.php';
            include_once __DIR__ . '/productList.php';
            include_once __DIR__ . '/productAdd.php';
            include_once './slideradd.php';
            include_once './sliderlist.php';
            include_once '../admin/orderList.php';
            include_once "./feedbackList.php";
            ?>

        </div>
        <p class="container__copyright">
            © Copyright 2022 DEV Nhân. All rights reserved. Design by--<a href="#" class="copyright">devnhan.com</a>
        </p>
    </div>
</body>
<script src="../js/tabAdmin.js"></script>
<script src="../js/handleRepass.js"></script>
<script src="../js/handleAddCategory.js"></script>
<script src="../js/handleDeleteCate.js"></script>
<script src="../js/handleEditCate.js"></script>
<script src="../js/handleAddProduct.js"></script>
<script src="../js/handleDelProduct.js"></script>
<script src="../js/handleAddSlider.js"></script>
<script src="../js/handleDelSlider.js"></script>
<script src="../js/handleDelFeedback.js"></script>
</html>