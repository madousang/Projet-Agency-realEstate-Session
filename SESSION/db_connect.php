<?php
// connexion à la base de données
    $db_root = 'root';
    $db_pwd = '';
    try {
            $db = new PDO('mysql:host=localhost;dbname=session',$db_root,$db_pwd);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            
        } catch (Exception $e) {
            echo "ERREUR: ".$e->getMessage();
        }