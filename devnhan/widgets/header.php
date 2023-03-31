
<div class="container__header d-flex justify-content-between ">
    <div class="container__header__logo">
        <a href="../php/index.php">
            <img class="container__header__logo_item" src="../img/dev_nhan_logo_v4.png" alt="">
        </a>
    </div>
    <form action="" class="container__header__search" method="">
        <label for="input__search" class="label label--search">
            <i class="bx bx-search-alt container__header__search__icon"></i>
        </label>
        <input type="text" id="input__search" class="container__header__search__item" name="input__search" placeholder="Tìm kiếm sản phẩm....">
    </form>
    <div class="container__header__user">
        <a href="../php/cart.php" class="container__header__user__item">
            <i class="bx bxs-cart-alt container__header__user__item__icon"></i>
        </a>
        <a href="../admin/login.php" class="container__header__user__item ">
            <i class="bx bxs-user container__header__user__item__icon"></i>
        </a>
    </div>
</div>
<div class="container__header2">
    <div class="container__header2__nav">
        <div class="container__header2__nav__item nav-product">
            Sản phẩm
        </div>
        <a href="../php/combo.php" class="container__header2__nav__item">
            Combo
        </a>
        <div class="container__header2__nav__item nav__intro">
            Giới thiệu
            <div class="nav__intro__sub">
                <div class="nav__into__sub__item">
                    <div class="nav__intro__sub__item__img">
                        <a href="../php/service.php">
                            <img src="../img/headerhover1.jpg" alt="" class="nav__intro__sub__item__img__item">
                        </a>
                    </div>
                    <div class="nav__intro__sub__item__content">
                        <h1 class="nav__intro__sub__item__content__h">
                            Dịch vụ 100% hài lòng
                        </h1>
                        <p class="nav__intro__sub__item__content__p">
                            Bật mí 11 dịch vụ mà Dev-Nhan cung cấp cho khách hàng
                        </p>
                    </div>
                </div>
                <div class="nav__into__sub__item">
                    <div class="nav__intro__sub__item__img">
                        <a href="../php/introduce.php">
                            <img src="../img/headerhover2.jpg" alt="" class="nav__intro__sub__item__img__item">
                        </a>
                    </div>
                    <div class="nav__intro__sub__item__content">
                        <h1 class="nav__intro__sub__item__content__h">
                            Câu chuyện
                        </h1>
                        <p class="nav__intro__sub__item__content__p">
                            Về Startup với mô hình online D2C
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="../php/size.php" class="container__header2__nav__item">
            Bảng size
        </a>
    </div>
    <div class="nav__product__sub">
        <?php
        require "../classes/category.php";
        $category = new Category();
        $cateItem = $category->list_category();
        ?>
        <?php
        if ($cateItem) {
            foreach ($cateItem as $item) {
        ?>
                <a href="../php/product.php?cateId=<?php echo $item['catId'] ?>" class="nav__product__sub__a">
                    <?php echo $item['catName']; ?>
                </a>
        <?php }
        } ?>
    </div>
</div>