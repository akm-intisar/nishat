<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hi@intisar.xyz";
    $headers = "From: ".$mailFrom;
    $txt = "You've recieved an email from".$name."./n/n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend"); 
}