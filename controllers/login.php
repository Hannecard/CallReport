<?php
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/login.php');



if(isset($_POST['login'])){
		if(isset($_POST['mail']) && !empty($_POST['mail']) ){
			if(isset($_POST['mdp']) && !empty($_POST['mdp']) ){		 
				$log=$_POST['mail'];
				
				$mdp=$_POST['mdp'];


				$connexion=find_connexion($log,$mdp);
				foreach ($connexion as $c) {
					$id=$c->id_utilisateur;
				}
				if(!empty($connexion))
				{

					   $_SESSION['connexion']=$mdp;
					   $_SESSION['nom']=$log;
					   $_SESSION['idu']=$id;


                    	header("Location:index.php?page=accueil");

                    
				}


				
			}
		}
	}


include(dirname(__FILE__).'/../views/login.php');



?>