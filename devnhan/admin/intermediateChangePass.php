<?php
include_once "../classes/changepass.php";
$pass = new changepass();
$_POST = json_decode(array_keys($_POST)[0], true);
$oldpass = md5($_POST['oldpass']);
$newpass = md5($_POST['newpass']);
$confirmpass = md5($_POST['confirmpass']);
$checkOldPass = $pass->testOldPass($oldpass);
if (!$checkOldPass)
    echo 0;
else {
    if ($confirmpass == $newpass) {
        $updatePass = $pass->updatePass($newpass);
        if ($updatePass)
            echo true;
        else echo 0;
    } else echo 0;
}
