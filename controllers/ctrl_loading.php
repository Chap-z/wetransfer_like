<?php

$target_dir = "assets/files";
$target_file = basename($_FILES["fileToUpload"]["name"]);

$path = $_FILES["fileToUpload"]['tmp_name'];




$truc = new CompressClass();
$truc-> compress($path, $target_file);
// $mail = new MailSend();
// $mail-> sendMail();