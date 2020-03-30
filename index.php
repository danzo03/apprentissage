<?php
//apprentissage des variables de sessions
session_start();//pour commencer a gerer des clients toujours utiliser session start
	if(isset($_SESSION['id'])){//si la session de l'utilisateur existe conduire a log.php
		header('location:log.php');
}
	else{
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?>"</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/master.css">
</head>
<body>
	<div class="div1"><br><br><br>
		<center><h1>BIENVENUE SUR LE SITE</h1></center><br><br><br>
		<div class="button">
			<center>
				<a href="connexion.php">
					<button class="button1" type="submit" name="button">connectez vous</button>
				</a><br><br>
				<a href="inscription.php">
					<button  class="button2" type="submit" name="button2">inscrivez vous</button></a>
			</center>
		</div>
	</div>

</body>
</html>
<?php
}
 ?>