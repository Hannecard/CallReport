<?php 
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/query.php');
if(!isset($_SESSION['nom'])){
	header("location:index.php?page=login");
}
if(isset($_POST['updatereal'])){
	$bool = update_real_todo($_POST['idt'],$_POST['range']);
}
if(isset($_POST['updatetodo'])){
	$date=$_POST['date'];
	$date=strtotime($date);
	$date=date("Y/m/d",$date);
	$bool = update_todo($_POST['idt'],$_POST['description'],$date,$_POST['range'],$_POST['titre']);
}
if(isset($_POST['ajouttodo'])){
	$range=$_POST['range'];
	$titre=$_POST['titre'];
	$description=$_POST['description'];
	$date=$_POST['date'];
	$date=strtotime($date);
	$date=date("Y/m/d",$date);
	
	$ajout=ajoutTODO($description,$date,$range,$titre,$_SESSION['idu']);
}
$todo=find_todo_all($_SESSION['idu']);


include(dirname(__FILE__).'/../views/todo.php');

 ?>