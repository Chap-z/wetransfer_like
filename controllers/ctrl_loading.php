<?php

require_once ('vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('views');

 $twig = new Twig_Environment($loader,[
     'cache' => false,
 ]); 

echo $twig->render('result.html', array('')); 


// $target_dir = "assets/files";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// $name = $_FILES["fileToUpload"]["name"];

// var_dump($name);

