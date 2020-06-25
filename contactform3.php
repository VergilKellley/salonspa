<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mobile = $_POST['mobile'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = 'vergilkelley@vergildkelley.com';
    $headers = "From: ".$mailFrom;
    $txt = "You have mail from ".$name.".\n\n".$mobile.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactform.php?mailsend");
}