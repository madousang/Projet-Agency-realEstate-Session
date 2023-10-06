<?php
	 include("db_connect.php");
     include("../php/connexion.php");
     include("../php/operation.php");
     $data = pro1();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultat</title>
	 <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/">
    <link rel="stylesheet" type="text/css" href="Nouveau dossier/style1.css">
    <link rel="stylesheet" type="text/css" href="Nouveau dossier/lightbox.min.css">
    <script type="text/javascript" src="Nouveau dossier/lightbox-plus-jquery.min.js"></script>
    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body{
        background-color: #eef1fa;
      }
		table{
			margin-left: 20px;
			width: 70%;
		}
		p{
			margin-left: 20px;
		}
		h1,th{
			font-weight: bold; font-family:Comic Sans MS ;
			text-align: center;
		}
		td{
			font-family:Comic Sans MS ;
			text-align: center;
		}
		a{
			text-decoration: none;
		}
		a:hover {
  			color: hotpink;
		}
		a:visited{
			color: green;
		}	
	</style>
</head>
<body>
	<h1>Demande en attente de validation</h1>
	<table class="table table-hover table-bordered align-middle">
	 <thead>
		<tr class="table-warning">
			<th>#</th><th>Prenom</th><th>Nom</th><th>Adresse email</th><th>Date_transaction</th><th>Telephone</th><th>Demande</th>
		</tr>
	 </thead>
	 <tbody class="table-group-divider ">
		<?php foreach($data as $key) { $i = 1;?>

		<tr class="table-warning">
			<th scope="row"><?php echo $key->n_personne;?></th>
			<td><?php echo $key->prenomPersonne;?></td>	
			<td><?php echo $key->nomPersonne;?></td>
			<td><?php echo $key->email_p;?></td>
			<td><?php echo $key->dateDemande;?></td>	
			<td><?php echo $key->phone_p;?></td>
			<td><?php echo $key->demande_p;?></td>
			<td><a href="suppr1.php?code=<?php echo $key->n_personne;?>">Supprimer</a></td>
		</tr >	
				
		<?php } ?>
		 </tbody>
	</table>
	<p>
		<a href="principale.php"><<<span>Retour</span></a>
	</p>
</body>
</html>