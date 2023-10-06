<?php
require("connexion.php");
require("operation.php");
$log = Afficher();
  
?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VALIDATION</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/">
    <link rel="stylesheet" type="text/css" href="Nouveau dossier/style1.css">
    <link rel="stylesheet" type="text/css" href="Nouveau dossier/lightbox.min.css">
    <script type="text/javascript" src="Nouveau dossier/lightbox-plus-jquery.min.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
      .nav-link:hover{
         color:#f8c415 ;
        text-decoration: underline;
       animation-name: modalopen;
        animation-duration: 1s;
      }
      @keyframes modalopen{
        from{opacity: 0;}
        to{opacity: 1;}
      }
    
      .row{
        margin-bottom: 20px;
        margin-left: 20%;
      }
      .row label {
        margin-left:-10px;
        margin-right:-10px;
      }
      .sp{
        font-size: 30px;
      }
     #sp1{
        font-size: 30px;
        font-weight: bold;
     }
     .sp2{
        margin-left: 30%;
      }
      .sp3{
        font-size: 13px;
        text-align: center; 
        font-family: Comic Sans MS;
      }
      .sp4{
        margin-left: 50px;
      }
      .form-check{
        margin-bottom: 10px;
      }
      .cool{
        color: #ffbe35; 
        font-family: Bodoni MT Black;
        font-size: 18px;
      }
      .cool1{
        margin-left: 40px;
        font-weight: bold;
      }
      .lead{
        margin-left: -50px;
        font-family: Comic Sans MS;
      }
      body{
        background-color: #eef1fa;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
 </head>
 <body class="bg-light">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Agence IMMOBILIERE</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="vente.php">Vente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="location.php">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Bien.php">Biens vendus</a>
        </li>
       
      </ul>
      <div>
      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
      		<li class="nav-item dropdown">
          	<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Agence</a>
          	<ul class="dropdown-menu" aria-labelledby="dropdown01">
            	<li><a class="dropdown-item" href="agence.php">Présentation</a></li>
            	<li><a class="dropdown-item" href="#">Actualité</a></li>
          	</ul>
        	</li>
	      	<li class="nav-item">
	        	<a class="nav-link" href="contact.php">Nous contacter</a>
	        </li>
        </ul>
      </div>
    </div>
  </div>
</nav> 

<div id="un2">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Administration</li>
  </ol>
</nav>
</div>

<main>
<div style="margin-left:50px; margin-bottom: 10px;">
   <span style="font-weight: bold;font-size: 30px;">Administration</span><br>
     Bienvenue dans l'espace utilisateur.<br>
</div>
<div style="margin-left:50px">
  <strong>IMPORTANT :</strong> Seul les administrateurs pourront se connecter sur cette page, 
  identifiez-vous en cliquant <a href="../SESSION/login.php">ici</a> 
</div>
</main>
</body>
</html>