<?php
session_start();
 include('fonction.php');
 include('connexion.class.php');
 $bdd=bdd();
 $erreur=null;
 if (isset($_POST['nom']) AND isset($_POST['password'])) {
 	$connexion=new connexion($_POST['nom'],$_POST['password']);
 	$verif=$connexion->verif();
 	if ($verif=="ok") {
 		if($connexion->session()){
 			header('location:log.php');
 		}
 		# code...
 	}
 	else{$erreur=$verif;
 		//echo $erreur;
 	}
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/master.css">
</head>
<body>
	<div class="div1"><br><br><br>
		<center><h1>connexion</h1></center><br><br><br>
		<center><form  action="" class="formulaire" method="POST">
		<input type="text" name="nom" placeholder="entrer votre nom"><br><br>
		<input type="password" name="password" placeholder="entrer votre mot de passe"><br><br>
		<?php 
		if ($erreur) {
			echo "<p>".$erreur."</p>" ;
		}
		
		 ?>
		<button class="button2" type="submit" name="button2"> valider</button>
		</center>
	</form>
			
	</div>
	
</body>
</html>