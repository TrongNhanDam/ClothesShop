
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/widgets.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/checkout.css">

</head>

<body>
    <div class="container-fluid">
        <?php require '../widgets/header.php'; ?>
        <div class="container__table">
            <table>
                <thead></thead>
                <tbody></tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <!-- <div class="container__checkout d-flex justify-content-center mb-3">
            <button class="container__checkout__a btn btn-dark px-4 fw-bold">Thanh toán ngay</button>
        </div> -->
        <div class="container w-50">
            <div class="container__ShipmentDetails">
                <h4 class="container__ShipmentDetails__title">
                    Thông tin giao hàng
                </h4>
                <div class="container__ShipmentDetails__login">
                    Bạn đã có tài khoản? <a href="" class="container__ShipmentDetails__login__a">Đăng nhập</a>
                </div>
                <input type="text" class="container__ShipmentDetails__name" placeholder="Họ và tên">
                <div class="container__ShipmentDetails__emailphone">
                    <input type="text" class="container__ShipmentDetails__emailphone__email" placeholder="Email">
                    <input type="text" class="container__ShipmentDetails__emailphone__phone" placeholder="Số điện thoại">
                </div>
                <input type="text" class="container__ShipmentDetails__address" placeholder="Địa chỉ">

                <form action="">
                    <div class="container__ShipmentDetails__ShipTo">
                        <select name="province" id="province" class="container__ShipmentDetails__ShipTo__pro set--select">

                        </select>
                        <select name="district" id="district" class="container__ShipmentDetails__ShipTo__dis set--select">

                        </select>
                        <select name="ward" id="ward" class="container__ShipmentDetails__ShipTo__wa set--select">

                        </select>

                    </div>
                </form>
                <h4 class="container__ShipmentDetails__payment">
                    Phương thức thanh toán
                </h4>
                <div class="container__ShipmentDetails__PaymentMethod">
                    <input type="radio" class="container__ShipmentDetails__PaymentMethod__radio">
                    <i class='bx bxs-package container__ShipmentDetails__PaymentMethod__icon'></i>
                    <p class="container__ShipmentDetails__PaymentMethod__p">Thanh toán khi giao hàng (COD)</p>
                </div>
                <div class="container__ShipmentDetails__complete">
                    <!-- <button class="container__ShipmentDetails__complete__btn btn btn-primary">Hoàn tất đặt hàng</button> -->
                    <button class="container__checkout__a btn btn-dark px-4 fw-bold">Hoàn tất đặt hàng</button>
                </div>
            </div>
        </div>
        <?php require '../widgets/footer.php'; ?>
    </div>
</body>
<script src="../js/apiProvince.js"></script>
<script src="../js/cart.js"></script>
<script>
    window.addEventListener('load', showCart, false);
</script>
<script src="../js/toggleHeader.js"></script>
<script src="../js/handleAddOrder.js"></script>

</html>