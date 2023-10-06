
<br><br><br><br>
<?php
require("connexion.php");
if(isset($_GET['Afficher'])) {
    if (isset($_GET['objetifGestion']) AND isset($_GET['typeLog']) AND isset($_GET['surface']) AND isset($_GET['ville'])) {
      if (!empty($_GET['objetifGestion']) AND !empty($_GET['typeLog']) AND !empty($_GET['surface']) AND !empty($_GET['ville'])) {
        
        $recherche0 = htmlspecialchars(strip_tags($_GET['surface']));
        $recherche1 = htmlspecialchars(strip_tags($_GET['typeLog']));
        $recherche2 = htmlspecialchars(strip_tags($_GET['objetifGestion']));
        $recherche3 = htmlspecialchars(strip_tags($_GET['ville']));
        $recherche5 = htmlspecialchars(strip_tags($_GET['prix']));
       
        $req=$con->prepare('SELECT * FROM logement WHERE typeLog LIKE "%'.$recherche1.'%" AND surface LIKE "%'.$recherche0.'%" AND objetifGestion LIKE "%'.$recherche2.'%" AND prix LIKE "%'.$recherche5.'%" AND objetifGestion = "Vente" ORDER BY n_Log DESC');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){    
              $recherche_0 = $data['imgLog'];
              $recherche_1= $data['nbrePieces'];
              $recherche_2 = $data['etatLog'];
        } 

        $recherche6 = $recherche_0;
        $recherche7 = $recherche_1;
        $recherche8 = $recherche_2;

        $req3=$con->prepare('SELECT * FROM adresse WHERE ville LIKE "%'.$recherche3.'%" ORDER BY n_Rue DESC');
        $req3->setFetchMode(PDO::FETCH_ASSOC);
        $req3->execute();
        $data3 = $req3->fetchAll();
        $valider = "oui";
     }   
   }
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<!-- CSS only -->
<link rel="stylesheet" type="text/css" href="Nouveau dossier/style1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style type="text/css">
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
       body{
        background-color: #eef1fa;
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
          <a class="nav-link" aria-current="page" href="#ancre">Rechercher un bien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Vente.php">Vente</a>
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
            <a class="nav-link" href="#">Nous contacter</a>
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
    <li class="breadcrumb-item active" aria-current="page"><a href="vente.php">Vente</a></li>
    <li class="breadcrumb-item active" aria-current="page">Résultats de recherche</li>
  </ol>
</nav>
</div>

 <main >
<a name="ancre"></a><div style="margin-left:50px">
    <?php ?>
      <h4><strong><?= @count(@$req3)." ".(@count(@$req3)>1?"Annonce(s) trouve(é)s":"Annonce trouveé"); ?></strong></h4>
    <?php ?>
  </div>
      <?php if (@$valider=="oui") {?>
      <table class="row featurette" style="margin-left: 100px">
      <tr style="background-color: #f8f6ff;">
        <td class="col-md-5">
          <h3 class="featurette-heading fw-normal lh-1"><?php echo ($recherche1); ?>: <span class="text-muted">En <?php echo ($recherche2); ?> à <?php echo ($recherche3); ?>.</span></h3>
            
          <p class="lead">
            <h3 class="featurette-heading fw-normal lh-1">Prix : <span class="text-muted"><?php echo ($recherche5); ?> FCFA.</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Surface : <span class="text-muted"><?php echo ($recherche0); ?>m².</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Nombres de pièces : <span class="text-muted"><?php echo ($recherche7);?> pièces.</span>
            </h3> 
            <h3 class="featurette-heading fw-normal lh-1">Etat : <span class="text-muted"><?php echo ($recherche8);?>.</span></h3>
          </p>
        </td>
        <td class="col-md-5">
         <img src="<?php echo($recherche6);?>" class="rounded-4 border border-1 border-warning p-2 mb-2 border-opacity-50" style="width:20cm ; height: 10cm;">
        </td>
      </tr>
  <br>
    </table> 
  <?php } ?>
  <?php 
  if (@$valider=="non") {
    include("vente.php");
  } 
  ?> 
 </main>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top" style="margin-left: 60px;margin-right:60px;">
    
    <div class="col mb-3">
      <a class="d-flex align-items-center mb-3 link-dark text-decoration-none" href="#ancre1">
        <svg version="1.1" class="bi me-4" width="50" height="50"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <image  width="50" height="50" xlink:href="im1.png" />
        </svg>
      </a>
      <p class="text-muted">&copy; 2022 </p>
    </div>

    <div class="col mb-3">

    </div>
     <div class="col mb-3">

    </div>

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

<!--
<?php  
  
?>-->