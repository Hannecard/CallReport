<?php

function find_connexion($email,$mdp){
		global $db;
		$connexion = array();
		$req = $db->requete("SELECT*FROM users WHERE email = '".$email."' and mdp='".$mdp."'");
		while($data = $req->fetch()){
			$connexion[] = $data;
		}
		return $connexion;
	}

?>