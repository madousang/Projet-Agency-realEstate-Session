<?php
	include("db_connect.php");
    include("../php/connexion.php");
    include("../php/operation.php");
    $code = $_GET['code'];
        $req=$con->prepare("DELETE  FROM client_dem WHERE n_personne = $code");
			$req->execute(array($code));
			$req->closeCursor();
    header("location:text1.php");

?>