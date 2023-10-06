<?php
require("connexion.php");
require("operation.php");
$log = Afficher();

@$keybors = $_POST['keybors'];
@$valider = $_POST['valider'];
if (isset($valider) AND !empty(trim($keybors))) {
  $req = $con->prepare("SELECT typeLog,objetifGestion,prix,surface,nbrePieces,etatLog,imgLog,dispo,dateDispo,typeGarage,quartier,ville,img1,img2,img3,img4 FROM             (logement,adresse,gallery) INNER JOIN (garage) on logement.n_Log = gallery.n_Gallery and logement.n_Log = adresse.n_Rue and logement.n_Log = garage.n_Garage WHERE typeLog LIKE '%$keybors%' ");
  $req->execute();
  $data = $req->fetchAll(PDO::FETCH_OBJ);
  $afficher = "oui";
  $req->closeCursor();
}

?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESSAI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/">
<link rel="stylesheet" type="text/css" href="Nouveau dossier/style1.css">
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
      
      body{
        background-color: #eef1fa;
      }
      .deux{
        width: auto;
        height: 15cm;
        margin-top: 10%;
        border-radius: 10px 10px 10px 10px;
        background-image: url(https://fr.mdparchitecture.com/wp-content/uploads/2020/12/Aziz_K_01_02.jpg);
        margin-bottom: 10%;
      }
      .po{
        float: left;
        margin-top: 8%;
        margin-left: 4%;
        padding: 25px;
        width: 380px;
        background-color:#ddc85d ;
        border-radius: 12px 12px 12px 12px;
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
          <a class="nav-link" href="location.php">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Bien.php">Biens vendus</a>
        </li>
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
         <form class="d-flex" role="search" method="post" action="">
          <input class="form-control me-2 " type="text" name="keybors" value="<?php echo $keybors ?>" placeholder="Mot_clé" aria-label="Search"><button class="btn btn-outline-primary" name="valider" style="margin-left: -9px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" name="valider" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
          
        </form>
    </div>
  </div>
</nav> 

<main>
  <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <div style="width: auto;height: 13cm;">
          <img src="https://media-cdn.tripadvisor.com/media/vr-splice-j/02/86/10/37.jpg" style="width: auto;height: 12cm;" class="d-block w-100" alt="photo1">  
        </div>
          <div class="carousel-caption d-none d-md-block" style="text-align: left; margin-bottom: 10%;">
            <h1>Notre Agence</h1>
            <p>Le confort de tous les temps.</p>
          </div>
      </div>

      <div class="carousel-item" data-bs-interval="5000">
        <div style="width: auto;height: 13cm;">
          <img src="https://hba-architecture.net/wp-content/uploads/2021/04/5-3.jpg" style="width: auto;height: 12cm;" class="d-block w-100" alt="photo2">           
        </div>
          <div class="carousel-caption d-none d-md-block" style="text-align: left; margin-bottom: 10%;">
            <h1>Notre Agence</h1>
            <p>Le confort de tous les temps.</p>
          </div>
      </div>

      <div class="carousel-item" data-bs-interval="5000">
        <div style="width: auto;height: 13cm;">
          <img src="http://fr.mdparchitecture.com/wp-content/uploads/2016/11/b1-1024x614.jpg" style="width: auto;height: 12cm;" class="d-block w-100" alt="photo3">  
        </div>
          <div class="carousel-caption d-none d-md-block" style="text-align: left; margin-bottom: 10%;">
           <h1>Notre Agence</h1>
            <p>Le confort de tous les temps.</p>
          </div> 
      </div>
    </div>
  </div>
  <?php if (@$afficher!="oui") {?>
  <div style="margin-left:50px">
    <?php ?>
      <strong><?= Compter();?> Annonce(s) trouvée(s)</strong><br>
    <?php ?>
  </div>
  <?php foreach ($log as $key){?>
     <table class="row featurette" style="margin-left: 100px">
      <tr style="background-color: #f8f6ff;">
          <td class="col-md-5">
          <h3 class="featurette-heading fw-normal lh-1"><?= $key->typeLog?> : <span class="text-muted">En <?= $key->objetifGestion?> à <?php echo ($key->ville); ?>.</span></h3>
            <p class="lead">
              <h3 class="featurette-heading fw-normal lh-1">Adresse(quartier) : <span class="text-muted"><?=$key->quartier?>.</span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Prix : <span class="text-muted"><?= $key->prix?> FCFA<?php if ($key->objetifGestion == 'Location') {?>/mois.<?php } ?></span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Surface : <span class="text-muted"><?= $key->surface?>m².</span></h3>
              <h3 class="featurette-heading fw-normal lh-1">Nombres de pièces : <span class="text-muted"><?= $key->nbrePieces?> pièces.</span></h3> 
              <h3 class="featurette-heading fw-normal lh-1">Etat : <span class="text-muted"><?= $key->etatLog?>.</span></h3>

              <a href="plus.php?tplog=<?php echo $key->typeLog ?>&Oblog=<?php echo $key->objetifGestion ?>&Prix=<?php echo $key->prix ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&Etat=<?php echo $key->etatLog ?>&img0=<?php echo $key->imgLog ?>&dispo=<?php echo $key->dispo ?>&date=<?php echo $key->dateDispo ?>&garage=<?php echo $key->typeGarage ?>&quartier=<?php echo $key->quartier ?>&ville=<?php echo $key->ville ?>&img1=<?php echo $key->img1 ?>&img2=<?php echo $key->img2 ?>&img3=<?php echo $key->img3 ?>&img4=<?php echo $key->img4 ?>" class="btn btn-outline-secondary">Plus d'infos<span class="badge rounded-pill bg-info">+</span></a>
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
 <?php } ?>
 <?php if (@$afficher=="oui") {?>
  <div style="margin-left:50px">
    <?php ?>
      <strong><?= @count($data)."  ".(@count($data)>1?"Résultats trouvés":"Résultat trouvé");?></strong><br>
    <?php ?>
  </div>
  <?php foreach($data as $key) { ?>
      <table class="row featurette" style="margin-left: 100px">
      <tr style="background-color: #f8f6ff;">
        <td class="col-md-5">
          <h3 class="featurette-heading fw-normal lh-1"><?php echo $key->typeLog; ?> <span class="text-muted">en <?php echo $key->objetifGestion; ?> à <?php echo $key->ville; ?>.</span></h3>
            
          <p class="lead">
            <h3 class="featurette-heading fw-normal lh-1">Adresse(quartier) : <span class="text-muted"><?=$key->quartier?>.</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Prix : <span class="text-muted"><?= $key->prix?> FCFA<?php if ($key->objetifGestion == 'Location') {?>/mois.<?php } ?></span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Surface : <span class="text-muted"><?php echo $key->surface; ?>m².</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Nombres de pièces : <span class="text-muted"><?php echo $key->nbrePieces;?> pièces.</span>
            </h3> 
            <h3 class="featurette-heading fw-normal lh-1">Etat : <span class="text-muted"><?php echo $key->etatLog;?>.</span></h3>

            <a href="plus.php?tplog=<?php echo $key->typeLog ?>&Oblog=<?php echo $key->objetifGestion ?>&Prix=<?php echo $key->prix ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&Etat=<?php echo $key->etatLog ?>&img0=<?php echo $key->imgLog ?>&dispo=<?php echo $key->dispo ?>&date=<?php echo $key->dateDispo ?>&garage=<?php echo $key->typeGarage ?>&quartier=<?php echo $key->quartier ?>&ville=<?php echo $key->ville ?>&img1=<?php echo $key->img1 ?>&img2=<?php echo $key->img2 ?>&img3=<?php echo $key->img3 ?>&img4=<?php echo $key->img4 ?>" class="btn btn-outline-secondary">Plus d'infos<span class="badge rounded-pill bg-info">+</span></a>
           
          </p>
        </td>
        <td class="col-md-5">
         <img src="<?php echo $key->imgLog;?>" class="rounded-4 border border-1 border-warning p-2 mb-2 border-opacity-50" style="width:20cm ; height: 10cm;">
        </td>
      </tr>
  <br>
    </table>
    <?php } ?> 
  <?php } ?>
  <div class="deux">
    <div class="po">
      Très proche de sa clientèle, <br>l’agence met à votre disposition des services personnalisés avec<br>des honoraires d’agence à taux réduits<br><br>Achéter et louer chez KALIFA,<br>rapidement, en toute sécurité et au bon prix !<br><span><img src="https://cdn.pixabay.com/photo/2020/05/24/20/22/divider-5216039_960_720.png" style="width:100%;float: bottom; height:3cm"></span>
    </div>
  </div>
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

    <div class="col mb-3">

    </div>
    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Liens Utiles</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="agence.php" class="nav-link p-0 text-muted">Notre Agence</a></li>
        <li class="nav-item mb-2"><a href="contact" class="nav-link p-0 text-muted">Contact</a></li>
        
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

