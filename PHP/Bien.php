<?php
	include("connexion.php");
  include("operation.php");
  $log = AfficherB();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

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

<style type="text/css">
  body{
        background-color: #eef1fa;
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
 .cal1{
      padding: -10px 0px 50px 0px ;
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
          <a class="nav-link" href="Location.php">Location</a>
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
    <li class="breadcrumb-item active" aria-current="page">Biens Vendus</li>
  </ol>
</nav>
</div>

<main>
  <div class="con">
    <?php foreach ($log as $key){?>
     <table class="row featurette" style="margin-left: 100px">
      <tr style="background-color: #f8f6ff;">
          <td class="col-md-5">
          <h3 class="featurette-heading fw-normal lh-1"><?= $key->typeLog?> : <span class="text-muted"> à <?php echo ($key->ville); ?>.</span></h3>
            <p class="lead">
              <h3 class="featurette-heading fw-normal lh-1">Adresse(quartier) : <span class="text-muted"><?=$key->quartier?>.</span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Prix : <span class="text-muted"><?= $key->prix?> FCFA<?php if ($key->objetifGestion == 'Location') {?>/mois.<?php } ?></span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Surface : <span class="text-muted"><?= $key->surface?>m².</span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Nombres de pièces : <span class="text-muted"><?= $key->nbrePieces?> pièces.</span></h3> 
              <h3 class="featurette-heading fw-normal lh-1">Etat : <span class="text-muted"><?= $key->etatLog?>.</span></h3> 
              <h3 class="featurette-heading fw-normal lh-1">
                <?php if ($key->objetifGestion == "Vente") {?> 
                  <span><button type="button" class="btn btn-success">Vendu</button></span>
                <?php } else {?>
                  <span><button type="button" class="btn btn-success">Loué</button></span>
                <?php }?>
              </p>
          </td>
          <td class="col-md-5" id="gallery">
            <a href="<?= $key->imgLog?>">
           <img src="<?= $key->imgLog?>" class="rounded-4 border border-1 border-warning p-2 mb-2 border-opacity-50" style="width:20cm ; height: 10cm;">
           </a>
          </td>
          
      </tr>
      <br>
        </table> 
 <?php } ?>
 </div>
</main>
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

    <div class="col mb-3"></div> <div class="col mb-3"></div>

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
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>