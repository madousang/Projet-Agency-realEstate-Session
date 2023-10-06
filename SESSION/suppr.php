<?php
	include("db_connect.php");
    include("../php/connexion.php");
    include("../php/operation.php");
    $code = $_GET['code'];
        $req=$con->prepare("DELETE  FROM ent_cl_vd WHERE id_cl_vd = $code");
			$req->execute(array($code));
			$req->closeCursor();
    header("location:text.php");

?>