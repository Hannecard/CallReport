<?php

function find_cat_liste(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT c.id_categorie as id ,c.libelle_categorie as lib , cat.libelle_categorie as lib1 FROM t_categorie as c inner join t_categorie as cat on cat.id_categorie=c.id_categorie_parent where c.id_categorie_parent IS NOt NULL ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}

function find_cat_liste_parent(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT id_categorie as id ,libelle_categorie as lib  FROM t_categorie  where  id_categorie_parent IS NULL ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}	

function find_cat_parent(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT c.id_categorie as id, c.libelle_categorie as lib , cat.libelle_categorie as lib1 FROM t_categorie as c inner join t_categorie as cat on cat.id_categorie=c.id_categorie_parent where c.id_categorie_parent!=5  ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}

function insert_categorie($nom,$id_insert_image){
		global $db;
		
		
		$req = $db->requete("INSERT INTO t_categorie VALUES('','".$nom."',null,'".$id_insert_image."')");
		
		
		return $req;
	}
function insert_categorie1($nom,$parent,$id_insert_image){
		global $db;
		
		
		$req = $db->requete("INSERT INTO t_categorie VALUES('','".$nom."','".$parent."','".$id_insert_image."')");
		
		
		return $req;
	}

function insert_Image($libelle,$data){
		global $db;
		
		
		$req = $db->requete("INSERT INTO t_image VALUES('','".$libelle."','','".$data."')");
		
		
		return $req;
	}


function find_last_id_image(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT * FROM t_image  where id_image=LAST_INSERT_ID()");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}		
?>