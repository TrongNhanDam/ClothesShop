<?php
include_once __DIR__ . '/../lib/session.php';
Session::checkLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="sign-in open">
        <h1 class="signup-heading">Sign in</h1>
        <button class="signup-social">
            <div class="signup-social-icon">
                <i class="fa-brands fa-google"></i>
            </div>
            <span class="signup-social-text">Sign up with Google</span>
        </button>
        <div class="signup-or"><span>Or</span></div>
        <form action="" method='POST' class="signup-form" autocomplete="off">
            <label for="user" class="signup-label"> User Name or Email:</label>
            <input id="singin-input-username" name='user' type="text" id="user" class="signup-input" placeholder="Eg: TrongNhan" />
            <label for="password" class="signup-label"> Password:</label>
            <input id="signin-input-password" name='pass' type="password" id="password" class="signup-input" />
            <button id="btn-submit-login" name="btn-submit" class="signup-submit">Sign in</button>
        </form>
        <p class="signup-already">
            <span>Don’t have an account?</span>
            <a href="#" class="signup-login-link"> Sign up</a>
        </p>
    </div>
    <div class="sign-up">
        <h1 class="signup-heading">Sign up</h1>
        <button class="signup-social">
            <div class="signup-social-icon">
                <i class="fa-brands fa-google"></i>
            </div>
            <span class="signup-social-text">Sign up with Google</span>
        </button>
        <div class="signup-or"><span>Or</span></div>
        <form action="" class="signup-form" autocomplete="off">
            <label for="fullname" class="signup-label"> Fullname:</label>
            <input type="text" id="signup-fullname" class="signup-input" placeholder="Eg: Đàm Trọng Nhân" />
            <label for="email" class="signup-label"> Email Or UserName:</label>
            <input type="email" id="signup-email" class="signup-input" placeholder="Eg: nhanB1910113@student.ctu.edu.vn" />
            <label for="number" class="signup-label"> Phone number:</label>
            <input type="text" id="signup-phone" class="signup-input" placeholder="0000XXXX" />
            <label for="password" class="signup-label"> Password:</label>
            <input type="password" id="signup-password" class="signup-input" />
            <label for="re-password" class="signup-label"> Confirm Password:</label>
            <input type="password" id="signup-repassword" class="signup-input" />
            <button class="signup-submit">Sign up</button>
        </form>
        <p class="signup-already">
            <span>Already have an account ?</span>
            <a href="#" class="signin-login-link">Sign In</a>
        </p>
    </div>
</body>
<script src="../js/switchLogInSignUp.js"></script>
<script src="../js/handleLogin.js"></script>

</html>