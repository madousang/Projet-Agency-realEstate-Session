<?php
require("connexion.php");
require("operation.php");
  
   if(isset($_POST['confirmer'])) {
    if (isset($_POST['prenomPersonne']) AND isset($_POST['nomPersonne']) AND isset($_POST['email']) AND isset($_POST['tele'])) {
      if (!empty($_POST['prenomPersonne']) AND !empty($_POST['nomPersonne']) AND !empty($_POST['email']) AND !empty($_POST['tele'])) {

        $r0 = htmlspecialchars(strip_tags($_POST['prenomPersonne']));
        $r1 = htmlspecialchars(strip_tags($_POST['nomPersonne']));
        $r2 = htmlspecialchars(strip_tags($_POST['email']));
        $r3 = htmlspecialchars(strip_tags($_POST['date']));
        $r4 = htmlspecialchars(strip_tags($_POST['tele']));
        $r5 = htmlspecialchars(strip_tags($_POST['demande']));

         $req=$con->prepare("INSERT INTO client_dem (nomPersonne,prenomPersonne,email_p,dateDemande,phone_p,demande_p) 
         VALUES ('$r1','$r0','$r2','$r3',$r4,'$r5')");
                $req->execute(array($r1,$r0,$r2,$r3,$r4,$r5));
                $req->closeCursor();
     } 
   }
 }  
?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>

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
      .MOD{
        margin-left: 50px;
     }
     #MO{
      font-weight: bold;
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
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
</div>

<main>
<div style="margin-left:50px; margin-bottom: 10px;">
   <span style="font-weight: bold;font-size: 30px;">Nous contacter</span><br>
     Merci de compléter le formulaire ci-après. Vous recevrez par e-mail une copie de votre demande.<br>
     Si votre demande concerne des références particulières, merci de les indiquer.
</div>
<div style="margin-left:50px">
   <span style="font-size: 30px;">Contactez-nous</span><br>
     <span class="cool">AGENCE KALIFA</span><br>
    <span style="font-family:Comic Sans MS ;"> Téléphone : (+223) 97.35.25.02 / 78.10.85.78<br>
     Fax : (+223) 22.58.23.54<br>
     Adresse :<br>
     12 RUE DE BAMAKO<br>
     1934 MODIBO KEITA<br></span>
</div>
<div style="margin-left:50px">
<h3 class="featurette-heading fw-normal lh-1">Vos coordonnées</h3>
* Information obligatoire
</div>
<br>

 <div class="container">
   <form action="" method="post" >
      <div class="row"> 
        <div class="col-sm-1">
          <label for="idprenom" class="col-form-label">Prenom: *</label>
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
          <label for="idnom" class="col-form-label"><span style="margin-left: 20px;">Nom: *</span></label>
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
          <label for="idpays" class="col-form-label"><span style="margin-left: 20px;">Date: </span></label>
          </div> 
          <div class="col-sm-8">  
             <input type="date" name="date" class="form-control" id="idpays"  > 
           </div>
       </div> 
       <span class="sp">Pour vous contacter</span> 
        <div class="row"> 
        <div class="col-sm-1">
          <label for="idtel" class="col-form-label"><span style="margin-left: -17px;">Téléphone: *</span></label>
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
          <label for="idemail" class="col-form-label"><span style="margin-left: 17px;">Email: *</span></label>
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
       <div class="mb-3">
         <label for="textera" class="col-form-label"><span class="sp">Votre demande :*</span></label>
         <textarea class="form-control" name="demande" id="textera" rows="3"></textarea>
       </div> 
       <br>
        <table class="MOD">
        <tr>
          <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
          <td id="MO">S'il vous plait, veuillez =></td>
          <td>&emsp;<button type="submit" name="confirmer" class="btn btn-warning">SOUMETTRE</button></td> 
        </tr>
      </table>
   </form> <br>
 </div>   

  <div class="sp3">« Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par l'AGENCE pour gérer votre<br> demande de contact. Elles sont conservées pour la durée nécessaire à la gestion de la relation client dans le <br>respect des prescriptions légales applicables et sont destinées à nos conseillers Conformément à la loi « informatique et libertés ».</div>
  
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