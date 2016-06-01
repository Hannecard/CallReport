<?php 
	session_start();
	include 'modeles/class/Database.php';
	$db = new Database("bd_hannecard");
	$db->connect();
	//$bdd = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
	if(!empty($_GET['page'])){
		if(is_file('controllers/'.$_GET['page'].'.php')){
			include('controllers/'.$_GET['page'].'.php');
		}else{
			include('controllers/files/error.php');
		}
	}else{
		header("Location:index.php?page=accueil");
	}
	

 ?>