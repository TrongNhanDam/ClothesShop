<?php
include_once __DIR__ . '/../classes/adminLogin.php';
?>
<?php
$check = new adminLogin();
$_POST = json_decode(array_keys($_POST)[0], true);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['value_input_username'];
    $pass = md5($_POST['value_input_password']);
    $loginCheck = $check->login_admin($user, $pass);
    if ($loginCheck) {
        echo true;
    } else
        echo 0;
}
?>