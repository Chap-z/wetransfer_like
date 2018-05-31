<?php

class Bddmanager
{
    protected $bdd;
    private $host = "127.0.0.1";
    private $login = "root";
<<<<<<< HEAD
    private $password = "D1FRA16ay";

=======
    private $password = "";
 
>>>>>>> 6522cf3a9ceaa4e4bd18e9905ee4b2fb77aa0a5c
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