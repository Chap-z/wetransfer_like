<?php

$target_dir = "wetranfer_like_";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$path = $_FILES["fileToUpload"]["tmp_name"];

var_dump($target_file);
var_dump($path);

$file = new CompressClass();
$zipPath = $file -> compress($path, $target_file);

$fileToDB = new AddFile();
$fileToDB->add($zipPath);
$id = $fileToDB->getId($zipPath);

var_dump($id);