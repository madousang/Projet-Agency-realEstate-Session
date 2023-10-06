<?php 
    session_start();
    include("db_connect.php");
    include("../php/connexion.php");
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRICIPALE</title>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <style type="text/css">
            .zero{
                margin-top: 20px;
                margin-left: 45px;
                font-family: Comic Sans MS;
                size: 25px;
            }
            body{
        background-color: #eef1fa;
      }
        </style>
</head>
<body>
    <div id="content">
        <a href='index.php?deconnexion=true'><span>Déconnexion</span></a> 
        <br>
            <!-- tester si l'utilisateur est connecté -->
            <?php  
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:../PHP/identity.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bienvenue $user, vous êtes connectés.";
                }
            ?>  
                 <nav>
                    <ul>
                        <li><a href="text.php">Aller vers les paiements</a></li>
                    </ul>
                    <ul>
                        <li><a href="text1.php">Aller vers les demandes</a></li>
                    </ul>
                </nav>      

    </div>
</body>
</html>
