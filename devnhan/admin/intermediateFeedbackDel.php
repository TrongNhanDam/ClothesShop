<?php
include_once "../classes/feedback.php";
$feedback = new feedback();
$_POST = json_decode(array_keys($_POST)[0], true);
$feedId = $_POST['idFeedNumber'];
$del_feed = $feedback->del_feedback($feedId);
if ($del_feed) {
    echo $feedId;
    exit;
}
echo 0;
