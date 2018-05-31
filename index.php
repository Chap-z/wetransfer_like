<?php

require('models/compress.class.php');
require('models/mail.class.php');
require('models/Bddmanager.php');

<<<<<<< HEAD
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
        require_once('controllers/ctrl_loading.php');
        break;
        
}


// if (isset($_GET['action'])){
=======
if (isset($_GET['action'])){
>>>>>>> c1093de8b7f043492438c2b1f7138b2ec18ea60b
     
    switch ($_GET['action']) { 
        
        case 'home':
            require_once('controllers/ctrl_home.php');
            // require_once('controllers/control_generator.php');
            break;

        case 'loading':
            require_once('models/newFile.class.php');
            require_once('controllers/ctrl_loading.php');
            break;

        default:
            require_once('error.html');
            break;
    
    }
} else {
    require_once('controllers/ctrl_home.php');

}

// $mail = new MailSend();
// $mail-> sendMail();

