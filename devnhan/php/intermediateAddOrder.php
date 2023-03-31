
<?php
include_once "../classes/addOrder.php";
$addOrder = new addOrder();
$_POST = json_decode(array_keys($_POST)[0], true);
$uName  =  $_POST['uName'];
$uEmail =  $_POST['uEmail'];
$uPhone =  $_POST['uPhone'];
$uAddress =  $_POST['uAddress'];
$uPro =  $_POST['uPro'];
$uDis =  $_POST['uDis'];
$uWar =  $_POST['uWar'];
$insertItemToOrder = $addOrder->addToOrder(
    $uName,
    $uEmail,
    $uPhone,
    $uAddress,
    $uPro,
    $uDis,
    $uWar
);
if ($insertItemToOrder) {
    echo true;
    exit;
}
echo false;
