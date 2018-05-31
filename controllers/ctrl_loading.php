<?php

$target_dir = "wetranfer_like_";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$path = $_FILES["fileToUpload"]["tmp_name"];


$truc = new CompressClass();
$zipPath = $truc-> compress($path, $target_file);

$fileToDB = new AddFile();
$fileToDB->add($zipPath);
$id = $fileToDB->addName($zipPath);
var_dump($id);