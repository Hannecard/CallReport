<?php

function find_connexion($email,$mdp){
		global $db;
		$connexion = array();
		$mdp=sha1($mdp);
		$mdp=strtoupper($mdp);

		$req = $db->requete("SELECT*FROM t_utilisateur WHERE email_utilisateur = '".$email."' and mdp_utilisateur='".$mdp."'");
		while($data = $req->fetch()){
			$connexion[] = $data;
		}
		return $connexion;
	}

?>