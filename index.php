<?php

require('models/compress.class.php');
require('models/mail.class.php');

if (isset($_GET['action'])){
     
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

