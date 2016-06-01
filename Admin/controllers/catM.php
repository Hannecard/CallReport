<?php 
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/catM.php');

$id=$_SESSION['idcat'];



$infoscat=find_infos_cat($id);



foreach ($infoscat as $i) {
	$nom=$i->libelle_categorie;
	$id_image=$i->id_image_categorie;
	$parent=$i->id_categorie_parent;
	if($parent!=null){

		$parents=find_infos_cat_parent($parent);

	foreach ($parents as $p) {
		$cat_parent=$p->libelle_categorie;
	

		}


	}else
	{


		$cat_parent="Aucun";
	}

	


	
	
}

$all_parent=find_cat_parent_all();







if(isset($_POST['modif'])){



	$nom=$_POST['nom'];
	$parent=$_POST['parent_category'];
	var_dump($parent);



	if(is_uploaded_file($_FILES['Image']['tmp_name'])) {

		$imgData =addslashes(file_get_contents($_FILES['Image']['tmp_name']));


		$libelle=$_FILES['file']['name'];


		$insert=insert_Image_modif($libelle,$imgData);



		$id_image_last_insert=find_last_id_image();



		$notif=modif_categorie_with_image($nom,$parent,$id,$id_image_last_insert);






	}else{

		$notif=modif_categorie($nom,$parent,$id);


	}

	



}

include(dirname(__FILE__).'/../views/catM.php');

 ?>