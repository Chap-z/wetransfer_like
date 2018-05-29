<?php


require('models/compress.class.php');
require('models/mail.class.php');

$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);
 echo($path);
switch($path){
    
    case "/wetransfer_like/home" :
        require('controllers/ctrl_home.php');
        break;

    case "/wetransfer_like/loading":
        require("controllers/ctrl_loading.php");
        break;

    default:
        require_once('controllers/ctrl_home.php');
        break;
}


// if (isset($_GET['action'])){
     
//     switch ($_GET['action']) { 
        
//     //routeur
//         //case 'affiche':
//         //require_once('controleur/affiche.php');
//         //break;
//         case 'home':
//         require_once('controllers/ctrl_home.php');
//         // require_once('controllers/control_generator.php');
//             echo 'coucou le grand';
//         break;
//         default:
//         require_once('error.html');
    
//     }
// } else {
    // require_once('controllers/ctrl_home.php');

// }

// $truc = new CompressClass();
// $truc-> compress('mcd.jpg');
// $mail = new MailSend();
// $mail-> sendMail();

