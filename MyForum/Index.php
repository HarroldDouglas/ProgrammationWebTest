
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
	<head>
		<title >My FORUM</title>
		<style>
			.titre{
				
				color:blue;
				margin-right:auto;
				margin-left:auto;
				width:200px;
			}
			#ok{
				
				
			}
			.formulaire{
				margin-right:200px;
				margin-left:300px;
			}
		</style>
	</head>
	<body>
		<h1><strong class="titre">My Forum</strong></h1>
		<p><h4 style="margin-left:500px;">WELCOME TO THE BEST FORUM OF THE TIME!</h4></p>
		<div class="formulaire">
			<form action="Controller/indexController.php?type=connexion" method="POST">
				<label><b>PSEUDO:</b></label>
				<input type="text" name="pseudo" required />
				<br/><br/><br/>
				<label><b>PASSWORD:</b></label>
				<input type="password" name="password" required />
				<br/><br/><br/>
				<input type="submit" id="ok" value="valider" style="margin-right:0;">
				<br/>
				<p style="float:right">
					pas encore inscrit? cliquez<a href="View/inscription.php"> ici</a> pour vous inscrire!
				</p>
			</form>
		</div>
		<?php 
			if(isset($_GET['erreur']) AND $_GET['erreur']=="pseudoNoMatchPassword"){
				echo '<p align="center" style="color:red;">Le Nom ou le mot de passe est incorrect!</p>';
			}
		?>
	</body>
</html>