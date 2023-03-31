<?php
include_once __DIR__ . '/../classes/addOrder.php';
$showOrder = new addOrder();
$showOrderItem = $showOrder->getShowOrder();
?>
<div data-id="order-list" class="container__body__content order-list tab-content">
    <div class="container__body__content__title">
        <p class="container__body__content__title__p">
            Order list
        </p>
    </div>
    <div class='container__body__content__content'>
        <table class="table-order w-100">
            <thead>
                <tr>
                    <th> Id</th>
                    <th> Tên người nhận</th>
                    <th> Email người nhận</th>
                    <th> Số điện thoại người nhận</th>
                    <th> Địa chỉ người nhận</th>
                    <th> Mã số tỉnh</th>
                    <th> Mã số huyện</th>
                    <th> Mã số xã</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($showOrderItem) {
                    foreach ($showOrderItem as $item) {
                ?>
                        <tr>
                            <td><?php echo $item['orderId'] ?></td>
                            <td><?php echo $item['orderTenNguoiNhan'] ?></td>
                            <td><?php echo $item['orderEmailNguoiNhan'] ?></td>
                            <td><?php echo $item['orderSdtNguoiNhan'] ?></td>
                            <td><?php echo $item['orderDiaChiNguoiNhan'] ?></td>
                            <td><?php echo $item['orderAdPro'] ?></td>
                            <td><?php echo $item['orderAdDis'] ?></td>
                            <td><?php echo $item['orderAdWar'] ?></td>
                        </tr>
                <?php }
                } ?>
        </table>
    </div>
</div>