<?php 
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/query.php');
if(!isset($_SESSION['nom'])){
	header("location:index.php?page=login");
}
if(isset($_POST['updatepb'])){
	$date=$_POST['date'];
	$date=strtotime($date);
	$date=date("Y/m/d",$date);
	$bool = update_pb($_POST['idpb'],$_POST['description'],$date,$_POST['titre']);
}
if(isset($_POST['ajoutpb'])){
	
	$titre=$_POST['titre'];
	$description=$_POST['description'];
	$date=$_POST['date'];
	$date=strtotime($date);
	$date=date("Y/m/d",$date);
	
	$ajout=ajoutPB($description,$date,$titre,$_SESSION['idu']);
}
$pensebete=find_pensebete_All($_SESSION['idu']);

include(dirname(__FILE__).'/../views/pensesbetes.php');

 ?>