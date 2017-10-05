<?php
	try{
		$baseDeDonnees = 'mysql';
		$host = 'localhost';
		$dbname = 'myForum';
		$user = 'root';
		$password = '';
		$bdd = new PDO(''.$baseDeDonnees.':host='.$host.';dbname='.$dbname.';charset=utf8',''.$user.'',''.$password.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e){
		echo('dieErreur: '.$e->getMessage());
	}
?>
