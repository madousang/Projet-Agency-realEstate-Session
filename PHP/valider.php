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

              $req=$con->prepare("INSERT INTO ent_cl_vd (nom_cl_vd, prenom_cl_vd,email_cl_vd,date_trans, phone_cl_vd,demande_cl_vd) 
                VALUES ('$r1','$r0','$r2','$r3',$r4,'$r5')");
                $req->execute(array($r1,$r0,$r2,$r3,$r4,$r5));
                $req->closeCursor();
     } 
   }
 }  
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VALIDER</title>

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
     /*.Modal{
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          overflow: auto;
         /* background-color: #b59d96;
      }*/
    .modal-content{
        background-color: #d4e9e3;
        margin: 10% auto;
        text-align: center;
        width: 95%;
        visibility: visible;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17) ;
        animation-name: modalopen;
        animation-duration: 1s;
      }
      
      .modal-body{
        padding: 10px 20px;
      }
      .modal-header h2{
        font-family: Comic Sans MS;
      }
      .modal-footer{
        background: #d4e9e3;
        padding: 10px;
        color: #fff ;
        text-align: center;
      }
      
      .btn-close{
        color: white;
        float: right;
        font-size: 30px;
      }
      .btn-close:hover, .closeBtn:focus{
        color: #000;
        text-decoration: none;
        cursor: pointer;
        background-color: #ff6e5b;
      }
      body{
        background-color: #eef1fa;
      }
      .nav-link:hover{
         color:#f8c415 ;
         animation-name: modalopen;
        animation-duration: 1s;
        text-decoration: underline;
      }
      @keyframes modalopen{
        from{opacity: 0;}
        to{opacity: 1;}
      }
      .fin{
        text-align: center;
        text-decoration: underline;
        background-color: #ff6e5b;
        border-radius: 5px 5px 5px 5px; 
      }
     .MOD{
        margin-left: 50px;
     }
     #MO{
      font-weight: bold;
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
    <li class="breadcrumb-item active" aria-current="page">Transfert</li>
  </ol>
</nav>
</div>
 <table class="MOD">
   <tr>
    <td id="MO">S'il vous plait, veillez =></td>
    <td>&emsp;<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >TRANSFERER L'ARGENT</button></td>
  </tr>
 </table> 
	<!-- Modal -->
<div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="staticBackdropLabel">TRANSACTION</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span style="font-family:Comic Sans MS ; font-weight: bold; font-size:19px">Avant toute transaction veillez contacter l'agence au (+223) 20 20 40 16 / 20 20 30 14. <br></span>
         <h3>Transaction par OrangeMoney </h3>
         <p>Veillez faire la transaction au numéro Orange suivant : +223 93 14 05 77 ou au +223 77 47 85 66.</p>
         <h3>Transaction Bancaire</h3> 
         <p>Veillez faire la transaction au numero bancaire suivant : 5355 9012 1234 5678 ou au 4000 1234 5678 9010.</p>
         <p><span class="fin">Vous receverez une notification une fois la transaction faite.</span></p>
      </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>