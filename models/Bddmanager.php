<?php

class Bddmanager
{
    protected $bdd;
    private $host = "localhost";
    private $login = "root";
    private $password = "";
 
    public function __construct()
    {
        $bdd = new PDO('mysql:host=' . $this->host . ';dbname=wetransfer_like;charset=utf8', $this->login, $this->password);
        $bdd->exec("SELECT CHARACTER SET utf8");
        $this->bdd = $bdd;

    }
    public function getBdd(){
    	return $this->bdd;
    }

}