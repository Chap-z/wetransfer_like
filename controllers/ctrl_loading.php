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
// $target_dir = "wetranfer_like_";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// $path = $_FILES["fileToUpload"]["tmp_name"];


$file = new CompressClass();
$zipPath = $file -> compress($path, $target_file);

$fileToDB = new AddFile();
$fileToDB->add($zipPath);
$id = $fileToDB->getId($zipPath);

var_dump($id);