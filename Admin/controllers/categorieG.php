<?php 
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/categorieG.php');

if(!isset($_SESSION['connexion']))
{

    header("Location:index.php?page=connexion");
}

$listecat=find_cat_liste();
$listecat_parent=find_cat_liste_parent();
$cat_parent=find_cat_parent();

if(isset($_POST['ajout'])){


	$nomcat=$_POST['nom'];

	$file=$_FILES['Image']['tmp_name'];


	if(is_uploaded_file($_FILES['Image']['tmp_name'])) {


		$imgData =addslashes(file_get_contents($_FILES['Image']['tmp_name']));


		$libelle=$_FILES['Image']['name'];


		$insert=insert_Image($libelle,$imgData);



	}

	$id_image=find_last_id_image();
	
	foreach ($id_image as $i) {
		$id_insert=$i->id_image;
	}



	

	$parent=$_POST['parent_category'];
	if($parent==0){//si aucune categorie aprent n'est définit


		
	$notif=insert_categorie($nomcat,$id_insert);

	}else//si une categorie parent est choisie
	{


	$notif=insert_categorie1($nomcat,$parent,$id_insert);



	}


}


if(isset($_POST['modif'])){


if(isset($_POST['checked'])){

	var_dump("c");

	$id=$_POST['checked'];

	$_SESSION['idcat']=$id;


}


if(isset($_POST['checked1'])){


	var_dump("c1");



	$id=$_POST['checked1'];

	$_SESSION['idcat']=$id;

}

	
    header("Location:index.php?page=catM");



}






include(dirname(__FILE__).'/../views/categorieG.php');

 ?>