<?php

$target_dir = "assets/files";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$name = basename($_FILES["fileToUpload"]["name"]);

echo($name);