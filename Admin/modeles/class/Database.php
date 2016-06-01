<?php

Class Database extends PDO{

	private $pdo;

	private $dbName;
	private $host = 'localhost';
	private $user = 'root';
	private $password = '';

	public function __construct($dbName){
		$this->dbName = $dbName;
	}

	public function connect(){
		try{
			$this->pdo = new PDO("mysql:dbname=".$this->dbName."; host=".$this->host.";charset=utf8", $this->user, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return true;
		} catch (Exception $e){
			echo $e;
			return false;
		}
		
	}

	public function getPDO(){
		return $this->pdo;
	}

	public function requete($requete, $param = array()){
		$req = $this->pdo->prepare($requete);
		$req->execute($param);
		return $req;
	}
}