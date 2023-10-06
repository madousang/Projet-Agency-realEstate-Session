<?php
require("connexion.php");
	
	function Ajouter($r0,$r1,$r2,$r3,$r4,$r5)
	{
		if (require("connexion.php")) {
		$req=$con->prepare("INSERT INTO ent_cl_vd (nom_cl_vd, prenom_cl_vd,email_cl_vd,date_trans, phone_cl_vd,demande_cl_vd) VALUES ('$r0','$r1','$r2','$r3',$r4,'$r5')");
			$req->execute(array($r0,$r1,$r2,$r3,$r4,$r5));
			$req->closeCursor();
		}
	}
	function Ajoutercl($r0,$r1,$r2,$r3,$r4,$r5)
	{
		if (require("connexion.php")) {
		$req=$con->prepare("INSERT INTO client (nomPersonne, prenomPersonne,email_cl,dateTrans, phone_cl,demande_cl) VALUES ('$r0','$r1','$r2','$r3',$r4,'$r5')");
			$req->execute(array($r0,$r1,$r2,$r3,$r4,$r5));
			$req->closeCursor();
		}
	}
	function AjouterTr($r0)
	{
		if (require("connexion.php")) {
		$req=$con->prepare("INSERT INTO transaction (dateTrans) VALUES ('$r0')");
			$req->execute(array($r0));
			$req->closeCursor();
		}
	}
	function Afficher()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT typeLog,objetifGestion,prix,surface,nbrePieces,etatLog,imgLog,dispo,dateDispo,typeGarage,quartier,ville,img1,img2,img3,img4 FROM (logement,adresse,gallery) INNER JOIN (garage) on logement.n_Log = gallery.n_Gallery and logement.n_Log = adresse.n_Rue and logement.n_Log = garage.n_Garage ");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$req->closeCursor();
		}
	}
	function AfficherB()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT typeLog,objetifGestion,prix,surface,nbrePieces,etatLog,imgLog,quartier,ville FROM (logement,adresse) INNER JOIN (transaction) on logement.n_Log = adresse.n_Rue and logement.n_Log = transaction.Num_transact ");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$req->closeCursor();
		}
	}
	function propre()
	{
		if (require("connexion.php")) {
			$request=$con->prepare("SELECT * FROM garage ORDER BY n_Garage DESC");
		    $request->execute();
		    $datareq = $request->fetchAll(PDO::FETCH_OBJ);
			return $datareq;
			$request->closeCursor();
		}
	}
	function pro()
	{
		if (require("connexion.php")) {
			$request=$con->prepare("SELECT * FROM ent_cl_vd ORDER BY id_cl_vd ASC");
		    $request->execute();
		    $datareq = $request->fetchAll(PDO::FETCH_OBJ);
			return $datareq;
			$request->closeCursor();
		}
	}
	function pro1()
	{
		if (require("connexion.php")) {
			$request=$con->prepare("SELECT * FROM client_dem ORDER BY n_personne ASC");
		    $request->execute();
		    $datareq = $request->fetchAll(PDO::FETCH_OBJ);
			return $datareq;
			$request->closeCursor();
		}
	}
	function Suppr($id)
	{
		if (require("connexion.php")) {
			$req=$con->prepare("DELETE * FROM ent_cl_vl WHERE id_cl_vd = ?");
			$req->execute(array($id));
			$req->closeCursor();
		}
	}
	function Compter()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT COUNT(*) n_Log FROM logement");
			$req->execute();
			$data = $req->fetch(PDO::FETCH_ASSOC);
			print_r($data['n_Log']);
			$req->closeCursor();
		}
	}
	function Compter1()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT COUNT(*) n_Log FROM logement WHERE objetifGestion = 'Vente'");
			$req->execute();
			$data = $req->fetch(PDO::FETCH_ASSOC);
			print_r($data['n_Log']);
			$req->closeCursor();
		}
	}
	function Compter2()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT COUNT(*) n_Log FROM logement WHERE objetifGestion = 'Location'");
			$req->execute();
			$data = $req->fetch(PDO::FETCH_ASSOC);
			print_r($data['n_Log']);
			$req->closeCursor();
		}
	}
	function Afficher1()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT typeLog,objetifGestion,prix,surface,nbrePieces,etatLog,imgLog,dispo,dateDispo,typeGarage,quartier,ville, img1,img2,img3,img4 FROM (logement,adresse,gallery) INNER JOIN (garage) on logement.n_Log = gallery.n_Gallery and
			logement.n_Log = adresse.n_Rue and logement.n_Log = garage.n_Garage and logement.objetifGestion = 'Vente'");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$req->closeCursor();
		}
	}
	function Afficher2()
	{
		if (require("connexion.php")) {
			$req=$con->prepare("SELECT typeLog,objetifGestion,prix,surface,nbrePieces,etatLog,imgLog,dispo,dateDispo,typeGarage,quartier,ville,img1,img2,img3,img4 FROM (logement,adresse,gallery) INNER JOIN (garage) on logement.n_Log = gallery.n_Gallery and
			logement.n_Log = adresse.n_Rue and logement.n_Log = garage.n_Garage and logement.objetifGestion = 'Location'");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$req->closeCursor();
		}
	}
?>