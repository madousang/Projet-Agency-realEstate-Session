<?php
	include("db_connect.php");
	include("../php/connexion.php");
	include("../php/operation.php");
	$r0 = $_GET['nom'];
	$r1 = $_GET['prenom'];
	$r2 = $_GET['email'];
	$r3 = $_GET['date'];
	$r4 = $_GET['phone'];
	$r5 = $_GET['demande'];
	Ajoutercl($r0,$r1,$r2,$r3,$r4,$r5);
	AjouterTr($r3);
	header("location:text.php");
?>
