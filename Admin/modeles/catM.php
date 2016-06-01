<?php
function find_infos_cat($id){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT * FROM t_categorie where id_categorie='".$id."' ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}




function find_cat_parent_all(){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT id_categorie as id , libelle_categorie as lib FROM t_categorie  where id_categorie_parent IS NULL");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}


function find_infos_cat_parent($id){
		global $db;
		$cat = array();
		$req = $db->requete("SELECT * FROM t_categorie where id_categorie=".$id." ");
		while($data = $req->fetch()){
			$cat[] = $data;
		}
		return $cat;
	}	

function modif_categorie($nom,$parent,$id){
		global $db;
		
		
		if( $db->requete(" UPDATE t_categorie SET libelle_categorie='".$nom."', id_categorie_parent='".$parent."' WHERE id_categorie=".$id." ")){



			$notif=1;
		}else{

			$notif=2;
		}
		
		
		return $notif;
	}



function modif_categorie_with_image($nom,$parent,$id,$id_image_last_insert){
		global $db;
		
		
		if( $db->requete(" UPDATE t_categorie SET libelle_categorie='".$nom."', id_categorie_parent='".$parent."',id_image_categorie='".$id_image_last_insert."' WHERE id_categorie=".$id." ")){



			$notif=1;
		}else{

			$notif=2;
		}
		
		
		return $notif;
	}	
function insert_Image_modif($libelle,$data){
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