<?php

class Bddmanager
{
    protected $bdd;
    private $host = "localhost";
    private $login = "root";
<<<<<<< HEAD
    private $password = "root";

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    private $password = "D1FRA16ay";

=======
>>>>>>> 43a40045ff4311076804efa530d535b12f5082d4
    private $password = "";
 
>>>>>>> 6522cf3a9ceaa4e4bd18e9905ee4b2fb77aa0a5c
>>>>>>> 34c366e15e64ee5f8b952e8f792e3d10f29686a6
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