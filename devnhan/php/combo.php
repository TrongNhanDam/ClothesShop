
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
    <!-- link another -->
</head>

<body>
    <div class="container-fluid">
        <?php
        require '../widgets/header.php';
        ?>
        <div class="d-flex align-items-center justify-content-center mt-5 mb-5">
            <h1 class="bg-warning w-100 text-center p-3">Coming Soon.....</h1>
        </div>
        <?php
        require __DIR__ . '/../widgets/backtotop.php';
        require '../widgets/footer.php';
        ?>
    </div>
</body>
<script src="../js/toggleHeader.js"></script>

</html>