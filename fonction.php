<?php 
function bdd(){//pour connecter a la base de donner 
 try {//boucle try catch pour gerer erreur
 	$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;//gerer automatiquement les erreurs
 	$bdd=new PDO("mysql:host=localhost; dbname=base","root","",$pdo_options);//connexion a la base
 } catch (Exception $e) {
 	die("Erreur:".$e->getMessage());
 }
 return $bdd;
 } 
 ?>
