<?php

session_start();
include 'includes/database.php';

if(isset($_POST['submit'])){

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="assets/style/style.css">
    </head>
    <body>
        <div class="text-center">
            <h3>Espace Membre - Inscription</h3>
            <a href="index.php">Accueil</a>
            <a href="login.php">Se Connecter</a>
        </div>
        <div class="form-div text-center">
            <h3>Inscription</h3>
            <?php 
                if(isset($errorMessage)) {
            ?> 
            <p style="color: red;"><?= $errorMessage ?></p> <?php } ?>
            <?php 
                if(isset($successMessage)) {
            ?> 
            <p style="color: green;"><?= $successMessage ?></p> <?php } ?>
            <form method="post" action="">
                <span>Pseudo :</span><br>
                <input type="text" name="pseudo" placeholder="Pseudo"><br>

                <span>Adresse Mail :</span><br>
                <input type="email" name="email" placeholder="Adresse Mail"><br>

                <span>Mot de passe :</span><br>
                <input type="password" name="password" placeholder="Mot de passe"><br>

                <span>Confirmation mot de passe :</span><br>
                <input type="password" name="password_confirm" placeholder="Mot de passe"><br><br>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </body>
</html>