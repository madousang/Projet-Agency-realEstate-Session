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
    <title>DETAILS</title>

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
      .main{
			display: block;
			width: 60%;
			padding: 10px;
			background-color: white;
			margin: auto;
			box-shadow: 1px 1px 10px 5px gray;
		}
	 .main img{
		width: 100%;
		}
	 .thumbs{
		display: flex;
		align-items: center;
		justify-content: center;
		}
	 .thumbs li{
		width: 100px;
		padding: 10px;
		background-color: white;
		margin: 1%;
		box-shadow: 1px 1px 10px 5px gray;
		}
	 .thumbs li img{
		width: 100%;
		}
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
    <li class="breadcrumb-item active" aria-current="page">Details</li>
  </ol>
</nav>
</div>

<main>
  <a name="ancre"></a>
  <div style="margin-left:50px">
      <h3><strong>Description du bien</strong></h3>
  </div>
    <div class="main">
    	<img id="mainImg" src="<?php echo($_GET['img0']) ;?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    	<ul class="thumbs">
    		<li><a href="<?php echo($_GET['img0']) ;?>" data-lightbox="mygallery"><img src="<?php echo($_GET['img0']) ;?>"></a></li>
    		<li><a href="<?php echo($_GET['img1']) ;?>" data-lightbox="mygallery"><img src="<?php echo($_GET['img1']) ;?>"></a></li>
    		<li><a href="<?php echo($_GET['img2']) ;?>" data-lightbox="mygallery"><img src="<?php echo($_GET['img2']) ;?>"></a></li>
    		<li><a href="<?php echo($_GET['img3']) ;?>" data-lightbox="mygallery"><img src="<?php echo($_GET['img3']) ;?>"></a></li>
    		<li><a href="<?php echo($_GET['img4']) ;?>" data-lightbox="mygallery"><img src="<?php echo($_GET['img4']) ;?>"></a></li>
    	</ul>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
	<div class="col-md-6" style="margin-left:30%">
      <div class="card-body" style="margin-top: 30px;">
        <h5 class="card-title" >Type de bien : <span class="text-muted"><?php echo($_GET['tplog']); ?></span>
        	<span class="card-title">&emsp;&emsp;&emsp;&emsp;&emsp;Etat : <span class="text-muted"><?php echo($_GET['Etat']); ?>.</span></span>
        </h5>
        <p>
        <h5 class="card-title">Type de transaction : <span class="text-muted"><?php echo($_GET['Oblog']); ?></span>
        	<span class="card-title">&emsp;&emsp;&emsp;&emsp;Surface : <span class="text-muted"><?php echo($_GET['surface']); ?> m².</span></span></h5> </p>
         <p><h5 class="card-title">Prix : <span class="text-muted"><?php echo($_GET['Prix']); ?> FCFA<?php if ($_GET['Oblog'] == 'Location') {?>/mois.<?php } ?></span></h5></p>
         <p><h5 class="card-title">Disponibilité : <span class="text-muted"><?php echo($_GET['dispo']); ?>.</span></h5> </p>
        <p> <h5 class="card-title">Type de garage : <span class="text-muted"><?php echo($_GET['garage']); ?>.</span></h5> </p>
         <p><h5 class="card-title">Nombre de pièces : <span class="text-muted"><?php echo($_GET['nbrePieces']); ?> pièces.</span></h5> </p>
         <p><h5 class="card-title">Date de disponibilité : <span class="text-muted"><?php echo($_GET['date']); ?>.</span></h5> </p>
        <p> <h5 class="card-title">Emplacement : <span class="text-muted"><?php echo($_GET['quartier']); ?>, <?php echo($_GET['ville']); ?>, Mali.</span></h5></p>
      </div>
    </div>
    <br>
    <table style="margin-left:50px;">
      <tr>
        <td>Pour contacter le service client&emsp;</td> 
        <td type="button" class="btn btn-outline-warning" >(+223) 97.35.25.02 / 78.10.85.78</td>
          <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
          <td style="text-align: center;"><a href="paiement.php?tplog=<?php echo($_GET['tplog']); ?>&surface=<?php echo($_GET['surface']); ?>&ville=<?php echo($_GET['ville']); ?>&quartier=<?php echo($_GET['quartier']); ?>&img0=<?php echo($_GET['img0']) ;?>&date=<?php echo($_GET['date']); ?>&garage=<?php echo($_GET['garage']); ?>&nbrePieces=<?php echo($_GET['nbrePieces']); ?>&dispo=<?php echo($_GET['dispo']); ?>&Prix=<?php echo($_GET['Prix']); ?>&Oblog=<?php echo($_GET['Oblog']); ?>&Etat=<?php echo($_GET['Etat']); ?>&img1=<?php echo($_GET['img1']) ;?>&img2=<?php echo($_GET['img2']) ;?>&img3=<?php echo($_GET['img3']) ;?>&img4=<?php echo($_GET['img4']) ;?>" class="btn btn-outline-warning">Passez au paiement</a></td>
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


