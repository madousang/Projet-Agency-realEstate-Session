<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONNEXION</title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
    <div id="container">
        <!-- zone de connexion -->
        <form action="verification.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required maxlength="8">
            <small class="form-text text-muted">Le mot de passe doit être d'au moins 8 caractères.</small>
            <input type="submit" id='submit' value='Connexion' >
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            ?>
        </form>
    </div>
</body>
</html>
