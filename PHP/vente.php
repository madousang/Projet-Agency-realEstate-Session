
<?php
  require("connexion.php");
  require("operation.php");
  $log = Afficher1();
  
  if(isset($_GET['Afficher'])) {
    if (isset($_GET['objetifGestion']) AND isset($_GET['typeLog']) AND isset($_GET['surface']) AND isset($_GET['ville'])) {
      if (!empty($_GET['objetifGestion']) AND !empty($_GET['typeLog']) AND !empty($_GET['surface']) AND !empty($_GET['ville'])) {
        
        $recherche0 = htmlspecialchars(strip_tags($_GET['surface']));
        $recherche1 = htmlspecialchars(strip_tags($_GET['typeLog']));
        $recherche2 = htmlspecialchars(strip_tags($_GET['objetifGestion']));
        $recherche3 = htmlspecialchars(strip_tags($_GET['ville']));
        $recherche5 = htmlspecialchars(strip_tags($_GET['prix']));
       
        $req=$con->prepare('SELECT * FROM logement WHERE typeLog LIKE "%'.$recherche1.'%" AND surface LIKE "%'.$recherche0.'%" AND objetifGestion LIKE "%'.$recherche2.'%" AND prix LIKE "%'.$recherche5.'%" AND objetifGestion = "Vente" ORDER BY n_Log DESC');       
        $req3=$con->prepare('SELECT * FROM adresse WHERE ville LIKE "%'.$recherche3.'%" ORDER BY n_Rue DESC');
         foreach ($log as $key) {
           if ($recherche1 == $key->typeLog && $recherche0 == $key->surface && $recherche2 == $key->objetifGestion && $recherche5 == $key->prix && $recherche3 == $key->ville) 
            {
              $req->execute();
              $data = $req->fetch(PDO::FETCH_ASSOC);
              $req3->execute();
              $req3->setFetchMode(PDO::FETCH_ASSOC);
              $data3 = $req3->fetchAll();
             //while($data = $req->fetch(PDO::FETCH_ASSOC)){    
                  $recherche6 = $data['imgLog'];
                  $recherche7= $data['nbrePieces'];
                  $recherche8 = $data['etatLog'];
           // }
             // @$recherche6 = $recherche_0;
              //@$recherche7 = $recherche_1;
              //@$recherche8 = $recherche_2;
              $valider = "oui";            
          }else {
                $valide = "ou";
          }
        }
     }else {
            $valide = "non";
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
    .col-auto{
      width: auto; 
    }
    .row {
      width: auto; 
      margin-left: 1%;
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
    .erreur{
      color: rgb(255, 0, 0);
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
    <li class="breadcrumb-item active" aria-current="page">Vente</li>
  </ol>
</nav>
</div>

 <main >
  <div class="un1"  style="background-color:#ffbe35; margin-left: 6%;height: 40%;width: 90%;">

    <form method="get" action="" enctype="multipart/form-data"  >
    <div class="row">
    <div class="col-auto">
      <label for="validationDefault01" class="col-form-label"><span style="margin-left: 5px;">Type de transaction</span></label>
      <select class="form-select" id="validationDefault01" name="objetifGestion" required>
        <option value="">Selectionner...</option>
        <option selected value="Vente">Vente</option>
        <option value="Location">Location</option>
      </select>
    </div>
   <div class="col-auto">
      <label for="validationDefault02" class="col-form-label"><span style="margin-left: 30px;">Type de bien</span></label>
      <select class="form-select" id="validationDefault02" name="typeLog" >
        <option selected value="">Selectionner...</option>
        <option value="Maison">Maison</option>
        <option value="Appartement">Appartement</option>
        <option value="Immeuble">Immeuble</option>
        <option value="Parking/Box">Terrain</option>
      </select>
      <?php
        if(isset($_GET['Afficher']) && empty($_GET['typeLog'])) {
          echo '<span class = "erreur">Le type de bien est obligatoire</span>';
        }
      ?>
    </div>
    <div class="col-auto">
      <label for="validationDefault03" class="col-form-label"><span style="margin-left: 30px;">Surface en m²</span></label>
      <select class="form-select" id="validationDefault03" name="surface" >
        <option selected value="">Choisir...</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="80">80</option>
      </select>
      <?php
        if(isset($_GET['Afficher']) && empty($_GET['surface'])) {
          echo '<span class = "erreur">La surface est obligatoire</span>';
        }
      ?>
    </div>
    <div class="col-auto">
      <label for="validationDefault04" class="col-form-label"><span style="margin-left: 30px;">Localisation</span></label>
      <select class="form-select" id="validationDefault04" name="ville" >
        <option selected value="">Selectionner...</option>
        <option value="Bamako">Bamako</option>
        <option value="Gao">Gao</option>
        <option value="Koulikoro">Koulikoro</option>
        <option value="Kayes">Kayes</option>
        <option value="Kati">Kati</option>
        <option value="Mopti">Mopti</option>
        <option value="Sikasso">Sikasso</option>
        <option value="Segou">Segou</option>
        <option value="Tombouctou">Tombouctou</option>
      </select>
      <?php
        if(isset($_GET['Afficher']) && empty($_GET['ville'])) {
          echo '<span class = "erreur">La ville est obligatoire</span>';
        }
      ?>
    </div>
    <div class="col-auto">
      <label for="validationDefault05" class="col-form-label"><span style="margin-left: 15px;">Prix en FCFA</span></label>
      <input type="number" class="form-control" id="validationDefault05" name="prix" placeholder="Budget max" >
      <?php
        if(isset($_GET['Afficher']) && empty($_GET['prix'])) {
          echo '<span class = "erreur">Le prix est obligatoire</span>';
        }
      ?>
    </div>
    <div class="col-auto">
        <label for="validationDefault06" class="col-form-label"><span style="margin-left: 10px;">Afficher bien</span></label>
        <input type="submit" name="Afficher" class="form-control btn btn-outline-secondary mb-3" id="validationDefault06">
    </div>
    </div>
  </form>
</div><br><br><br><br><br><br><br><br>

<?php if (@$valider=="oui") {?>
    <a name="ancre"></a><div style="margin-left:50px">
    
      <h4><strong><?= @count(@$req)." ".(@count(@$req)>1?"Annonce(s) trouve(é)s":"Annonce trouveé"); ?></strong></h4>
      
  </div>
      
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
            <?php $i = 0; ?>
          <?php while ($i == 0 || $key == $log):?>
            <a href="plus.php?tplog=<?php echo $key->typeLog ?>&Oblog=<?php echo $key->objetifGestion ?>&Prix=<?php echo $key->prix ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&Etat=<?php echo $key->etatLog ?>&img0=<?php echo $key->imgLog ?>&dispo=<?php echo $key->dispo ?>&date=<?php echo $key->dateDispo ?>&garage=<?php echo $key->typeGarage ?>&quartier=<?php echo $key->quartier ?>&ville=<?php echo $key->ville ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&img1=<?php echo $key->img1 ?>&img2=<?php echo $key->img2 ?>&img3=<?php echo $key->img3 ?>&img4=<?php echo $key->img4 ?>" class="btn btn-outline-secondary">Plus d'infos<span class="badge rounded-pill bg-info">+</span></a>
            <?php $i = $i+1; ?>
          <?php endwhile;?>
          </p>
        </td>
        <td class="col-md-5">
         <img src="<?php echo($recherche6);?>" class="rounded-4 border border-1 border-warning p-2 mb-2 border-opacity-50" style="width:20cm ; height: 10cm;">
        </td>
      </tr>
  <br>
    </table> 
  <?php } ?>

  <?php if (@$valide=="non") {?>
       <div style="margin-left:50px">
        
       <br><strong style="color:rgb(255, 0, 0);">S'il vous plait veillez remplir tous les champs du formulaire.</strong><br>

      </div> 
<?php } ?>

<?php if (@$valide=="ou" && @$valide!="non" && @$valider!="oui") {?>
       <div style="margin-left:50px">
        
       <br><strong style="color:rgb(255, 0, 0);">Nous n'avons pas de bien à vous proposer avec ces critères de recherches.</strong><br><br>

      </div> 
<?php } ?>

<?php if (@$valider!="oui" && @$valide!="non") { ?>
<a name="ancre"></a>
<div><h3 style="margin-left: 50px;">A vendre</h3></div>
<div style="margin-left:50px">
    
      <strong><?=Compter1();?> Annonce(s) trouvée(s)</strong><br>

  </div>

<?php foreach ($log as $key):?>
   
      <table class="row featurette" style="margin-left: 100px">
      <tr style="background-color: #f8f6ff;">
        <td class="col-md-5">
          <h3 class="featurette-heading fw-normal lh-1"><?=$key->typeLog?> : <span class="text-muted">En <?=$key->objetifGestion?> à <?=$key->ville?>.</span></h3>
            
          <p class="lead">
            <h3 class="featurette-heading fw-normal lh-1">Adresse(quartier) : <span class="text-muted"><?=$key->quartier?>.</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Prix : <span class="text-muted"><?=$key->prix?> FCFA.</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Surface : <span class="text-muted"><?=$key->surface?>m².</span></h3>
            <h3 class="featurette-heading fw-normal lh-1">Nombres de pièces : <span class="text-muted"><?=$key->nbrePieces?> pièces.</span>
            </h3> 
            <h3 class="featurette-heading fw-normal lh-1">Etat : <span class="text-muted"><?=$key->etatLog?>.</span></h3>
            <a href="plus.php?tplog=<?php echo $key->typeLog ?>&Oblog=<?php echo $key->objetifGestion ?>&Prix=<?php echo $key->prix ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&Etat=<?php echo $key->etatLog ?>&img0=<?php echo $key->imgLog ?>&dispo=<?php echo $key->dispo ?>&date=<?php echo $key->dateDispo ?>&garage=<?php echo 
              $key->typeGarage ?>&quartier=<?php echo $key->quartier ?>&ville=<?php echo $key->ville ?>&surface=<?php echo $key->surface ?>&nbrePieces=<?php echo $key->nbrePieces ?>&img1=<?php echo $key->img1 ?>&img2=<?php echo $key->img2 ?>&img3=<?php echo $key->img3 ?>&img4=<?php echo $key->img4 ?>" class="btn btn-outline-secondary">Plus d'infos<span class="badge rounded-pill bg-info">+</span></a>
          </p>
        </td>
        <td class="col-md-5" id="gallery">
          <a href="<?=$key->imgLog?>">
         <img src="<?=$key->imgLog?>" class="rounded-4 border border-1 border-warning p-2 mb-2 border-opacity-50" style="width:20cm ; height: 10cm;">
         </a>
       </td>
      </tr>
  <br>
    </table> 
    <?php endforeach;?>
  <?php } ?>
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