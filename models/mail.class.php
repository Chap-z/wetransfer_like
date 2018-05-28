<?php
class MailSend{

	protected $_db;
		
	// protected $_table;

	// public function __construct(){
	// 	$this->_db = new Bddmanager();
	// 	$this->_db = $this->_db->getBdd();
	// 	// $this->_table = 'me_link_meme_image';
	// }

	public function sendMail(){
		// $req = $this->_db->prepare('INSERT INTO ' . $this->_table . ' (id_meme, id_image) VALUES (:id_meme, :id_image)');
		// $req->bindParam(':id_meme', $idMeme);
		// $req->bindParam(':id_image', $idImage);
        // $req->execute();
        
		$Name = "Da DuderDi"; //senders name 
        $email = "email@adress.com"; //senders e-mail adress 
        $recipient = "martint033@gmail.com"; //recipient 
        $mail_body = "Clou"; //mail body 
        $subject = "Coucou"; //subject 
        $header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

        mail($recipient, $subject, $mail_body, $header); //mail command :) 
    }
}