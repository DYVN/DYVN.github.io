<?php

if (isset(_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $mailfrom = $POST['mail'];
    $message = $_POST['message'];

    $mailTo = "thetrelifestyle@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have a new request from " .$name."\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsend");


}

?>