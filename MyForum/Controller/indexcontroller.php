<?php session_start();
// si le nom et le mot de passe coincide, alors on démarre une session puis on renvoie à travers l'url à la page forum
if(isset($_POST['pseudo']) && isset($_POST['password'])){
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
}

include "../Model/Manager.class.php";
include "../Model/Membre.class.php";
include "../Model/connexion.php";
$manager = new Manager();


	if($_GET['type'] =="connexion"){
		
		if($manager->checkLogin($pseudo, $_POST['password'])){
			$_SESSION['membre']= $manager->getMembreByIdPseudo($pseudo);
			header('location:../View/forum.php?pseudo='.$_SESSION['membre']->getPseudo());
		}
		else{
			header('location:../index.php?erreur=pseudoNoMatchPassword');
		}
	}
	else if($_GET['type'] =="inscription"){
		// on recupère les autres champs
		$nomComplet = $_POST['NomComplet'];
		$email = $_POST['email'];
		$sexe = $_POST['sexe'];
		// on teste d'abord si le pseudo existe
		if($manager->checkMembre($pseudo)){
			header('location:../View/inscription.php?erreur=pseudoExists');
		}
		else{
			// on teste si les mots de passe coincide
			if($_POST['password'] != $_POST['cpassword']){
				header('location:../View/inscription.php?erreur=2passwordDifferents');
			}
			else{
				$manager->addMembre($pseudo, $_POST['password'], $email, $sexe, $nomComplet);
				$_SESSION['membre']= $manager->getMembreByIdPseudo($pseudo);
				echo 'le new membre là a pour pseudo :'.$_SESSION['membre']->getPseudo().', et pour email:'.$_SESSION['membre']->getEmail();
				header('location:../View/forum.php?pseudo='.$pseudo);
			}
		}
	}
	else if($_GET['type'] == "deconnexion"){
		session_destroy();
		header('location:../index.php');
		exit();
	}