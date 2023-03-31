
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="../css/widgets.css">
    <link rel="stylesheet" href="../css/feedback.css">
</head>

<body>
    <div class="container-fluid">
        <?php require __DIR__ . '/../widgets/header.php'; ?>
        <div class="container__title--contact">
            <p class="container__title--contact__p">Thông tin liên hệ</p>
        </div>
        <div class="container__contact">
            <div class="container__contact__info">
                <div class="container__contact__info__item">
                    <i class='bx bx-home-alt icon--contact'></i>
                    <p class="container__contact__info__item__p">HUB Cần Thơ: Số 40, Đường Nguyễn Văn Linh, Phường Hưng Lợi, Quận Ninh Kiều, TP. Cần Thơ</p>
                </div>

                <div class="container__contact__info__item">
                    <i class='bx bx-phone-call icon--contact'></i>
                    <p class="container__contact__info__item__p">Hotline
                        0823-938-8509</p>
                </div>


                <div class="container__contact__info__item">
                    <i class='bx bx-envelope icon--contact'></i>
                    <p class="container__contact__info__item__p">
                        Email
                        nhanb191011@student.ctu.edu.vn</p>
                </div>


                <div class="container__contact__info__item">
                    <i class='bx bxl-facebook-square icon--contact'></i>
                    <p class="container__contact__info__item__p">
                        Facebook: facebook.com/devnhan.7800</p>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8568.788963881454!2d105.77671880857076!3d10.032760949820632!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1649639017132!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <form action="" method="POST" class="container__form">
            <p class="container__form__feedback">
                Ý kiến đóng góp
            </p>
            <p class="container__form__title">
                Những ý kiến đánh giá, đóng góp từ quý khách sẽ giúp clothes dev dần trở nên hoàn thiện hơn!
            </p>
            <label for="email" class="container__form__label">Email:</label>
            <input type="text" placeholder="Nhập email của bạn" id='email' class="container__form__input">
            <label for="feedback" class="container__form__label">Nội dung:</label>
            <textarea id="feedback" name="" placeholder="Nội dung đóng góp" class="container__form__textarea"></textarea>
            <button type="submit" class="container__btn btn-guest btn btn-warning">
                Gửi
            </button>
        </form>
        <?php require __DIR__ . '/../widgets/backtotop.php'; ?>
        <?php require __DIR__ . '/../widgets/footer.php'; ?>
    </div>
</body>
<script src="../js/toggleHeader.js"></script>
<script src="../js/handleFeedback.js"></script>
</html>