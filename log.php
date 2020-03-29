<?php
session_start();
if(isset($_SESSION['id'])){
	echo "BIENVENU ".$_SESSION['nom'];
}
else{
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $title; ?></title>
</head>
<body>
 <a href="deconnection.php">deconnexion</a>
</body>
</html>