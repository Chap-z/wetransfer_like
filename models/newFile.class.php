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

        
		// $req = $this->_db->prepare('INSERT INTO ' . $this->_table . ' (id_meme, id_image) VALUES (:id_meme, :id_image)');
		// $req->bindParam(':id_meme', $idMeme);
		// $req->bindParam(':id_image', $idImage);
		// $req->execute();
        
        




	}
}