<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include("db_connect.php");
    
    // on applique htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = htmlspecialchars($_POST['username']); 
    $password = htmlspecialchars($_POST['password']);
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = $db->prepare($requete);
        $exec_requete->execute();
        $reponse = $exec_requete->fetch(PDO::FETCH_ASSOC);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
$requete->closeCursor();
?>