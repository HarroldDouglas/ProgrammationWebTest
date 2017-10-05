
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
		<form method="POST" action="../Controller/forumController.php?type=createSubject">
			<b><h2><label>Titre:</label></b><input name="title"/></h2>
			<b><h2><label>Contenu:</label></b><input name="content"/></h2>
			<input type="submit" value="CREER"/>
		</form>
	</body>
</html>