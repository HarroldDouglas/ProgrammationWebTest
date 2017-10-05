
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
	<head>
		<title >My FORUM</title>
		
	</head>
	<body style="margin-left:100px">
		<h1><strong style="color:blue;margin-left:-100px;">My Forum</strong></h1>
        <br/>
        <h2 style="margin-left:-100px;">PSEUDO: <?php if(isset($_GET['pseudo']) AND $_GET['pseudo']!='') echo $_GET['pseudo'];?><strong></strong></h2>
        <br/>
        <h2 style="text-decoration:underline;text" align="center">SUBJECT</h2>
        <br/>
		<p><a href="../View/createSubject.php">créez un sujet!</a></p>
        <div><em>-ici les titres </em>
		</div>
        <div style="float:right"><a href="../Controller/indexcontroller.php?type=deconnexion">DECONNEXION</a></div>
	</body>
</html>