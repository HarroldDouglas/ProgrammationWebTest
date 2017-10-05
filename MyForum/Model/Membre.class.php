<?php



class Membre{
	
	private $IDMembre;
	private $NomComplet;
	private $Pseudo;
	private $Email;
	private $Password;
	private $Sexe;
	
	public function  __construct(array $donnees){
		$this->hydrate($donnees);
	}
	
	public function hydrate(array $tableau){
		
		foreach($tableau AS $key => $value){
				$method = 'set'.ucfirst($key);
				if(method_exists($this, $method)){
					$this->$method($value);
					echo '<p>voici l\'attribut quon vient de modifier
					</p>'.$key.''.$value;
				}
				echo 'je suis dans le constructeur \n';
				// if($key == "NomComplet"){
					// $this->setNomComplet($value);
					// echo 'je suis dans le nom complet';
				// }
				// if($key == "IDMembre")
					// $this->setIDMembre($value);
				// if($key == "Pseudo"){
					// $this->setPseudo($value);
					// echo 'je suis dans le pseudo';
				// }
				// if($key == "Password")
					// $this->setPassword($value);

				// }
				// if($key == "Email")
					// $this->setEmail($value);
				// if($key == "sexe")
					// $this->setSexe($value);
			}
}	
	// les setters 
	public function setIDMembre($IDMembre){
		// $this->IDMembre = $IDMembre;
	}
	public function setNomComplet($NomComplet){
		$this->NomComplet = $NomComplet;
	}
	public function setPseudo($Pseudo){
		$this->Pseudo = $Pseudo;
	}
	public function setEmail($Email){
		$this->Email = $Email;
	}
	public function setPassword($Password){
		$this->Password = $Password;
	}
	public function setSexe($sexe){
		$this->Sexe = $sexe;
	}
	// les getters
	public function getIDMembre(){
		return $this->IDMembre;
	}
	public function getNomComplet(){
		return $this->NomComplet;
	}
	public function getEmail(){
		return $this->Email;
	}
	
	public function getPseudo(){
		return $this->Pseudo;
	}
	public function getPassword(){
		return $this->Password;
	}
	public function getSexe(){
		return $this->Sexe;
	}
	// les fonctions pour la mise à jour
	public function updateEmail($Email){
		$this->setEmail($Email);
	}
	
	public function updateNomComplet($NomComplet){
		$this->setNomComplet($NomComplet);
	}
	public function updatePassword($Password){
		$this->setPassword($Password);
	}
	
	
}