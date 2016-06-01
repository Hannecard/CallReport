<?php 
	function find_uneActu($id){
		global $db;
		$actu = array();
		$req = $db->requete("SELECT*FROM actualites WHERE actualite_id = ".$id);
		while($data = $req->fetch()){
			$actu[] = $data;
		}
		return $actu;
	}
?>