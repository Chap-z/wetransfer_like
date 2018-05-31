<?php

class Bddmanager
{
    protected $bdd;
    private $host = "127.0.0.1";
    private $login = "root";
    private $password = "D1FRA16ay";

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