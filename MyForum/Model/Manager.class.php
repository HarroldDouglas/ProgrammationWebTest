<?php
class Manager{
	
	public function checkLogin($pseudo , $password){
		global $bdd;
		
		
		$request = $bdd->prepare('SELECT COUNT(*) AS NOMBRE FROM MEMBRE WHERE pseudo = "'.$pseudo.'" AND password = "'.$password.'"');
		$request->execute();
		$result = $request->fetchAll();
		return $result[0]['NOMBRE'];
	}
	
	public function getMembreByIdPseudo($param){
		global $bdd;
		if(is_int($param)){
			$request = $bdd->prepare('SELECT * FROM MEMBRE WHERE IDMembre ='.$param);
		}
		else{
			$request = $bdd->prepare('SELECT * FROM MEMBRE WHERE pseudo = "'.$param.'"');
		}
		$request->execute();
		$result = $request->fetchAll();
		return (new Membre($result[0]));
	}
	
	public function addMembre($pseudo, $password, $email, $sexe, $NomComplet){
		global $bdd;
		$request = $bdd->prepare('INSERT INTO membre(pseudo, password, email, NomComplet, sexe) VALUES("'.$pseudo.'", "'.$password.'", "'.$email.'", "'.$NomComplet.'", "'.$sexe.'")');
		$request->execute();
	}
	
	public function checkMembre($pseudo){
		global $bdd;
		$request = $bdd->prepare('SELECT COUNT(*) AS NOMBRE FROM MEMBRE WHERE pseudo = "'.$pseudo.'"');
		$request->execute();
		$result = $request->fetchAll();
		return $result[0]['NOMBRE'];
	}
	
	// maintenant on gère la création de sujet et tout ce qui va avec
	
	public function addSubject($IDMembre, $pseudo, $title, $content, $date){
		global $bdd;
		$request = $bdd->prepare('INSERT INTO subject(Pseudo, Title, dateCreation, content, IDMembre) VALUES("'.$pseudo.'", "'.$title.'", "'.$date'", "'.$content.'", "'.$IDMembre.'")');
		$request->execute();
	}
}