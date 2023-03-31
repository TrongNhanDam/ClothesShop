<?php
include_once __DIR__ . '/../classes/product.php';
$product = new product();
$showProduct = $product->list_product();
?>
<div data-id="product-list" class="container__body__content product-list tab-content">
    <div class="container__body__content__title">
        <p class="container__body__content__title__p">
            Product list
        </p>
    </div>
    <div class='container__body__content__content'>
        <table class="w-100">
            <thead class="thead-product">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="tbody-product">
                <?php
                if ($showProduct) {
                    foreach ($showProduct as $product) {
                        $showCateById = $category->getCateById($product['catId']);
                ?>
                        <tr class="row-product">
                            <td class="productId"><?php echo $product['productId'] ?></td>
                            <td class="productName"><?php echo $product['productName'] ?></td>
                            <td class="productDes"><?php echo $product['productDes'] ?></td>
                            <td class="productCate"><?php echo $showCateById['catName'] ?></td>
                            <td class="productImg"> <img class="list-product-img" src="./upload/<?php echo $product['productImg'] ?>" alt=""></td>
                            <td class="button-product">
                                <a class="btn btn-warning" href="./intermediateProductEdit.php?productId=<?php echo $product['productId']; ?>">
                                    Edit</a>
                                <button class="btn btn-danger btn-del" href="">Delete</button>
                            </td>
                        </tr>
                <?php }
                } ?>
        </table>
    </div>
</div>