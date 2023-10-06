<?php
	$db_root = "root";
	$db_pwd = '';
	try {
			$con = new PDO('mysql:host=localhost;dbname=conception_web',$db_root,$db_pwd);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			
		} catch (Exception $e) {
			echo "ERREUR: ".$e->getMessage();
		}
?>