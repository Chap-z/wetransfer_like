<?php


require('models/compress.class.php');
require('models/mail.class.php');


$truc = new CompressClass();

$truc-> compress('mcd.jpg');

$mail = new MailSend();

$mail-> sendMail();

