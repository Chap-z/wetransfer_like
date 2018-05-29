<?php
class AddFile{

	protected $db;
		
	// protected $_table;

	public function __construct(){

	$this->db = new Bddmanager();
	$this->db = $this->db->getBdd();
	//  $this->_table = 'me_link_meme_image';
	}

	public function add(){

        
		$req = $this->db->prepare('INSERT INTO `file`(`url`, `date`) VALUES ("",CURRENT_DATE)');
	
		$req->execute();
        

	}
}