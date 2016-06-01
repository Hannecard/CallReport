<?php  
function find_cat_liste(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT * FROM t_categorie  ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}

?>