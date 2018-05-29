<?php

$target_dir = "assets/files";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$name = $_FILES["fileToUpload"]["name"];

var_dump($name);

