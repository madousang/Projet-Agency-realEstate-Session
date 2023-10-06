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
    <title>PAIEMENT</title>

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
    <li class="breadcrumb-item active" aria-current="page">Paiement</li>
  </ol>
</nav>
</div>

<main>
<div style="margin-left:50px; margin-bottom: 10px;">
   <span style="font-weight: bold; font-family:Comic Sans MS ;font-size: 50px;">PAIEMENT</span><br>
</div>

<div style="margin-left:50px">
     Votre demande d'informations sur ce bien
     <table class="row featurette" style="margin-left: -15px;" >
       <tr>
         <td class="col-sm-3" width="80%" height="60%" ><img src="<?php echo($_GET['img0']) ;?>" width="80%" height="50%" class="img-fluid rounded-start" alt="..."></td>
         <td class="col-sm-3"><p class="lead">
              <?php echo($_GET['tplog']); ?> de <?php echo($_GET['surface']); ?> m² à <?php echo($_GET['quartier']); ?><br>Adresse : <?php echo($_GET['ville']); ?> / Mali.<br>Prix : <?php echo($_GET['Prix']); ?> FCFA<?php if ($_GET['Oblog'] == 'Location') {?>/mois.<?php } ?>
              </p></td>
         <td class="col-sm-3" ><a href="plus.php?tplog=<?php echo($_GET['tplog']); ?>&surface=<?php echo($_GET['surface']); ?>&ville=<?php echo($_GET['ville']); ?>&quartier=<?php echo($_GET['quartier']); ?>&img0=<?php echo($_GET['img0']) ;?>&date=<?php echo($_GET['date']); ?>&garage=<?php echo($_GET['garage']); ?>&nbrePieces=<?php echo($_GET['nbrePieces']); ?>&dispo=<?php echo($_GET['dispo']); ?>&Prix=<?php echo($_GET['Prix']); ?>&Oblog=<?php echo($_GET['Oblog']); ?>&Etat=<?php echo($_GET['Etat']); ?>&img1=<?php echo($_GET['img1']) ;?>&img2=<?php echo($_GET['img2']) ;?>&img3=<?php echo($_GET['img3']) ;?>&img4=<?php echo($_GET['img4']) ;?>" style="margin-left: 50%;" class="btn btn-warning">Retour au bien</a></td>
       </tr>
     </table>
</div><div style="margin-left:50px">
    <span style="font-weight: bold; font-family:Comic Sans MS ;font-size: 20px;">Veuillez soumettre ce formulaire pour s'enregistrer.</span><br>
    * Information obligatoire
</div>
<br>

 <div class="container">
   <form action="valider.php" method="post">
        <div class="row"> 
        <div class="col-sm-1">
          <label for="idprenom" class="col-form-label"><span style="margin-left: 70px;"></span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="text" name="prenomPersonne" class="form-control" id="idprenom"  placeholder="Votre prenom *" required pattern = "[A-Za-z]+"> 
             <?php
              if(isset($_POST['confirmer']) && empty($_POST['prenomPersonne'])) {
                echo '<span class = "erreur">Le prenom est obligatoire</span>';
              }
              $pattern="/^[a-zA-Z]+$/";
              if(isset($_POST['confirmer']) && !empty($_POST['prenomPersonne']) && @!preg_match($pattern,$_POST['prenomPersonne'])){
                echo "<span class = 'erreur'>Le prenom ".$_POST['prenomPersonne']." n'est pas conforme. Veuillez le ressaisir !</span>";
              }
            ?>
           </div>
       </div>  

        <div class="row"> 
        <div class="col-sm-1">
          <label for="idnom" class="col-form-label"><span style="margin-left: 70px;"></span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="text" name="nomPersonne" class="form-control" id="idnom"  placeholder="Votre nom *" required pattern = "[A-Za-z]+" > 
             <?php
              if(isset($_POST['confirmer']) && empty($_POST['nomPersonne'])) {
                echo '<span class = "erreur">Le nom est obligatoire</span>';
              }
              $pattern = "/^[a-zA-Z]+$/";
              if(isset($_POST['confirmer']) && !empty($_POST['nomPersonne']) && @!preg_match($pattern,$_POST['nomPersonne'])){
                echo "<span class = 'erreur'>Le nom ".$_POST['nomPersonne']." n'est pas conforme. Veuillez le ressaisir !</span>";
              }
            ?> 
           </div>
           
       </div> 
       <div class="row"> 
        <div class="col-sm-1">
          <label for="idemail" class="col-form-label"><span style="margin-left: 70px;"></span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="text" name="email" class="form-control" id="idemail"  placeholder="Votre@email.com *" required pattern = "[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]{2,5}"> 
             <?php
              if(isset($_POST['confirmer']) && empty($_POST['email'])) {
                echo "<span class = 'erreur'>L'adresse email est obligatoire</span>";
              }
              $pattern = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,5}$/"; 
              if(isset($_POST['confirmer']) && !empty($_POST['email']) && @!preg_match($pattern,$_POST['email'])){
                echo "<span class = 'erreur'>L'adresse email ".$_POST['email']." n'est pas conforme. Veuillez le ressaisir !</span>";
              }
            ?>
           </div>
            
       </div> 
       <div class="row"> 
        <div class="col-sm-1">
          <label for="idpays" class="col-form-label"><span style="margin-left: 70px;"></span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="date" name="date" class="form-control" id="idpays"  > 
           </div>
       </div> 
      <div class="row"> 
        <div class="col-sm-1">
          <label for="tel" class="col-form-label"><span style="margin-left: 70px;"></span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="tel" name="tele" class="card-number form-control" id="tel"  placeholder="(+223) *" data-stripe="number" required pattern="[0-9]{8}">
             <?php
              if(isset($_POST['confirmer']) && empty($_POST['tele'])) {
                echo '<span class = "erreur">Le numero de téléphone est obligatoire</span>';
              }
              $pattern="/^[0-9]{8}$/";
              if(isset($_POST['confirmer']) && !empty($_POST['tele']) && @!preg_match($pattern,$_POST['tele'])){
                echo "<span class = 'erreur'>Le numero ".$_POST['tele']." n'est pas conforme. Veuillez le ressaisir !</span>";
              }
            ?>
           </div>
           
       </div>
       <div class="row"> 
        <div class="col-sm-1">
          <label for="textera" class="col-form-label"><span class="sp"></span></label>
          </div> 
          <div class="col-sm-8">  
             <textarea class="form-control text-center text-muted " name="demande" id="textera" rows="3" >Je suis intéressé par votre annonce [<?php echo($_GET['tplog']); ?> en <?php echo($_GET['Oblog']); ?> à <?php echo($_GET['Prix']); ?> FCFA à <?php echo($_GET['quartier']); ?> <?php echo($_GET['ville']); ?> de <?php echo($_GET['surface']); ?>m² et <?php echo($_GET['nbrePieces']); ?> pièces].
             </textarea>
           </div>
       </div>
       <div class="row" style="margin-left:32%;"> 
        <div class="col-sm-6">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" id="modalBtn" name="confirmer" value="SOUMETTRE" class="btn btn-warning" /></div> 
        <div class="col-sm-2"></div>
       </div>
   </form> <br>
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
