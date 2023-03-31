
<?php
include_once "../classes/feedback.php";
$_POST = json_decode(array_keys($_POST)[0], true);
$email = $_POST['userEmail'];
$content = $_POST['userContent'];
$feedback = new feedback();
$insertFeedback = $feedback->insert_feedback($email, $content);

if ($insertFeedback) {
    echo $email = $_POST['userEmail'];
}
echo false;
