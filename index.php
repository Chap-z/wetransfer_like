<?php

// require('models/Compress.class.php');
// $truc = new CompressClass();

// $truc-> compress();

// $zip = new ZipArchive();
// if ($zip->open('test.zip') === TRUE) 
// {
//     if($zip->open('Zip.zip', ZipArchive::CREATE) === true)
// 	{
//         $zip->addFile('assets/files/mcd.jpg', 'newname.txt');
//         $zip->close();
//         echo 'ok';
//     }
//     else 
//     {
//         echo 'échec';
//     }
// } 

$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('assets/files/mcd.jpg');
    $zip->close();
    echo 'ok';
} else {
    echo 'échec';
}