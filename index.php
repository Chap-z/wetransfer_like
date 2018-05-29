<?php


require('models/compress.class.php');
require('models/mail.class.php');
// $url = $_SERVER['REQUEST_URI'];
// $r = parse_url($url);
// $endofurl = substr($r['path'], strrpos($r['path'], 'wetransfer_like/'));
// echo($endofurl);
// $url = explode("/",$_SERVER['REQUEST_URI'],0);
// var_dump($url);
// if (count($url)>3){
//     array_pop($url);
// }
// $path = implode("/", $url);
// echo($path);

if (isset($_GET['action'])){

    switch($_GET['action']){
    
        case "home" :
            require('controllers/ctrl_home.php');
            break;

        case "loading":
            require("controllers/ctrl_loading.php");
            break;

        default:
            require_once('controllers/ctrl_home.php');
            break;
    }
}
else{
    require_once('controllers/ctrl_home.php');
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

