<?php

require_once ('vendor/autoload.php');
$loader = new Twig_Loader_Filesystem('views');
 $twig = new Twig_Environment($loader,[
     'cache' => false,
 ]); 



if (isset($_POST['send']) && isset($_POST['recep']) ) {

    $mailSend = htmlEntities($_POST['send']);
    $mailRecep = htmlEntities($_POST['recep']);

    $sentMail = new GetMail();
    $sentMail -> get_mail_send($mailSend);
    $sentMail -> get_mail_recep($mailRecep);


    $target_dir = "wetranfer_like_";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $path = $_FILES["fileToUpload"]["tmp_name"];


    $file = new CompressClass();
    $zipPath = $file -> compress($path, $target_file);

    $fileToDB = new AddFile();
    $fileToDB->add($zipPath);
    $id = $fileToDB->getId($zipPath);

    

}
echo $twig->render('result.html', array('')); 

