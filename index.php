<?php

require('models/compress.class.php');
require('models/mail.class.php');


$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);
 echo($path); ///home/Charlotte/public_html

 //OK J'AI COMPRIS ///home/Charlotte/public_html

if (isset($_GET['action'])){
     
    switch ($_GET['action']) { 
        
    //routeur
        //case 'affiche':
        //require_once('controleur/affiche.php');
        //break;
        case 'home':
        require_once('controllers/ctrl_home.php');
        // require_once('controllers/control_generator.php');
        break;

        case 'loading':
        require_once('controllers/ctrl_loading.php');
        // require_once('controllers/control_generator.php');
            echo 'coucou le grand';
        break;

        default:
        require_once('error.html');
    
    }
} else {
    require_once('controllers/ctrl_home.php');

}


