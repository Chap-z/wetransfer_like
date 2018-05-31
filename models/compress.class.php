<?php
class CompressClass{

	protected $_db;
	protected $zip; 
		
	// protected $_table;

	// public function __construct(){
	// 	$this->_db = new Bddmanager();
	// 	$this->_db = $this->_db->getBdd();
	// 	// $this->_table = 'me_link_meme_image';
	// }

	public function compress($path, $filename){
		// $req = $this->_db->prepare('INSERT INTO ' . $this->_table . ' (id_meme, id_image) VALUES (:id_meme, :id_image)');
		// $req->bindParam(':id_meme', $idMeme);
		// $req->bindParam(':id_image', $idImage);
		// $req->execute();
		$this->zip = new ZipArchive; 
		$name = 'test.zip';

		if($this->zip->open('assets/files/'.$name, ZipArchive::CREATE) === true)
		{
	  
	  		// Ajout d’un fichier.
	  		$this->zip->addFile($path, $filename);
  
			// Et on referme l'archive.
			$this->zip->close();
		}
		else
		{
		  echo 'nope';
	  		// Traitement des erreurs avec un switch(), par exemple.
		}
		return $path;
	}
}