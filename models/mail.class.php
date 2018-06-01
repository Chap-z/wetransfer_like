<?php
class MailSend{

	protected $_db;
		
	// protected $_table;

	// public function __construct(){
	// 	$this->_db = new Bddmanager();
	// 	$this->_db = $this->_db->getBdd();
	// 	// $this->_table = 'me_link_meme_image';
	// }

	public function sendMail($sender, $recipient, $file){
		
        $recipient = "martint033@gmail.com"; //recipient 
        $mail_body = "Bonjour un ami vous à envoyer des fichiers sur wetransfer_like.\n Vous pouvez les récuperer sur le lien suivant : https://tomm.promo-17.codeur.online/wetransfer_like/download/".$file; //mail body 
        $subject = "Coucou"; //subject 
        $header = "From:  <" . $sender . ">\r\n"; //optional headerfields 

        mail($recipient, $subject, $mail_body, $header); //mail command :) 
    }
}