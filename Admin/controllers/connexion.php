<?php
header('Cache-control: private, must-revalidate');
include(dirname(__FILE__).'/../modeles/connexion.php');



if(isset($_POST['connexion'])){
		if(isset($_POST['username']) && !empty($_POST['username']) ){
			if(isset($_POST['password']) && !empty($_POST['password']) ){		 
				$log=$_POST['username'];
				
				$mdp=$_POST['password'];
				

				$connexion=find_connexion($log,$mdp);
				

				if(!empty($connexion))
				{

					   $_SESSION['connexion']=$mdp;
					   $_SESSION['nom']=$log;


                    	header("Location:index.php?page=accueil");

                    
				}


				
			}
		}
	}


include(dirname(__FILE__).'/../views/connexion.php');



?>