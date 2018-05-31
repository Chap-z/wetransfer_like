<?php
class AddFile{

	protected $db;
		
	// protected $_table;

	public function __construct(){

	$this->db = new Bddmanager();
	$this->db = $this->db->getBdd();
	//  $this->_table = 'me_link_meme_image';
	}

	public function add($name){


		$req = $this->db->prepare('INSERT INTO file(url, date) VALUES (:name,CURRENT_DATE)');
        $req->bindParam(':name', $name);
		$req->execute();
        

    }
    
    public function getId($name){

        $req = $this->db->prepare('SELECT file.id  FROM file WHERE file.url = :name');
        $req->bindParam(':name', $name);

        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);       
    }
}