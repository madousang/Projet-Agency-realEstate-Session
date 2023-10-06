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
    <title>Présentation</title>

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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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
        color: #ddc85d; 
        font-family: Bodoni MT Black;
        font-size: 30px;
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
      .MOD{
        margin-left: 50px;
     }
     #MO{
      font-weight: bold;
     }
     .erreur{
      color: rgb(255, 0, 0);
    }
    .sty{
      font-family:Comic Sans MS ; 
      margin-left: 80px;
      font-size: 30px;
    }
    .sty1{
      margin-left: 50px;
      padding: 30px 30px 30px 30px;
      font-family: Comic Sans MS;
    }
   .cal1{
      padding: -10px 0px 50px 0px ;
    }
    .cal{
      padding: 0px 0px 50px 110px ;
    }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
 </head>
 <body class="bg-light">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation" style="height: 1cm;">
  <div class="container-fluid">
    <div>
      <div class="cal1">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe0bvib2K06qURApoOyBak3atZi8zBiOPy-w&usqp=CAU" style="width:2cm;height: 1cm;float: left;margin-left: -14px ; margin-right: 10px;">
      <a class="navbar-brand" href="index.php">Agence KALIFA</a>
      </div> 
    </div>
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
            	<li><a class="dropdown-item" href="index.php">Actualité</a></li>
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
    <li class="breadcrumb-item active" aria-current="page">Présentation</li>
  </ol>
</nav>
</div>

<main>
  <table style="margin-top: 50px;">
    <tr>
      <!--<td>
        <div style="margin-left:50px">
           <span class="cool">AGENCE KALIFA</span><br><br>
           <span class="text-muted" style="font-family:Comic Sans MS ; font-weight: bold;"> Téléphone : 97.35.25.02 <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;78.10.85.78<br>
           Fax : (+223) 22.58.23.54<br>
           Adresse : kal125@gmail.com<br><br>
           12 RUE DE BAMAKO<br>
           1934 MODIBO KEITA<br></span>
        </div>
      </td>-->
      <td>
        <span class="sty">Découvrez notre agence</span><br>
        <div class="text-muted sty1">Kalifa reçoit une clientèle variée, locale ou <br>provenant d’autres régions ou pays, pour des projets aussi
        <br> différents que l’achat en résidence principale, la location annuelle,<br>
         la gestion immobilière d’un patrimoine immobilier, l’investissement immobilier<br>
          (défiscalisé ou non) et la vente d’un bien immobilier. Située à Bamako,<br>
           notre agence immobilière développe ses activités immobilières <br>dans plusieurs régions,
            notamment sur le secteur immobilier partout sur le territoire malien.</div>
      </td>
      <td height="12cm">
        <div class="cal">
          <img src="https://www.agency-immobilier.fr/media/images/upload/agency-immobilier-.jpg" style="width: auto;height: 5cm;">
        </div>
      </td>
    </tr>
  </table>


  
</main>
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top" style="margin-left: 60px;margin-right:60px;">
    
    <div class="col mb-3">
      <a class="d-flex align-items-center mb-3 link-dark text-decoration-none" href="index.php">
        <svg version="1.1" class="bi me-4" width="50" height="50"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <image  width="50" height="50" xlink:href="im1.png" />
        </svg>
      </a>
      <p class="text-muted">&copy; 2022 </p>
    </div>

    <div class="col mb-3"></div>
     <div class="col mb-3"></div>

    <div class="col mb-3">
      <h5>Liens Utiles</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="agence.php" class="nav-link p-0 text-muted">Notre Agence</a></li>
        <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact</a></li>
      </ul>
    </div>

  <div class="col mb-3">
      <h5>Nos services</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="vente.php" class="nav-link p-0 text-muted">Vente</a></li>
        <li class="nav-item mb-2"><a href="location.php" class="nav-link p-0 text-muted">Location</a></li>
        <li class="nav-item mb-2"><a href="Bien.php" class="nav-link p-0 text-muted">Biens Vendus</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>