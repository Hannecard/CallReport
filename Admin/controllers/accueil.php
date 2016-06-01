<?php 
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/accueil.php');

if(!isset($_SESSION['connexion']))
{

    header("Location:index.php?page=connexion");
}

$infos_cat=find_cat_liste();



include(dirname(__FILE__).'/../views/accueil.php');

 ?>