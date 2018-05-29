<?php

$target_dir = "wetranfer_like_";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$path = $_FILES["fileToUpload"]["tmp_name"];

var_dump($target_file);
var_dump($path);

$truc = new CompressClass();
$truc-> compress($path, $target_file);

$fileToDB = new AddFile();
$fileToDB->add();