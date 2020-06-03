<?php
include ('login.php'); // Comprend un script de connexion
if (isset ($_SESSION ['login_user'])) {
header("location: profile.php"); // Redirection vers la page de profil
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Formulaire de connexion en PHP avec session </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id = "login">
<h2> Formulaire de connexion </h2>
<form action = "" method = "post">
<label> UserName: </label>
<input id = "name" name = "username" placeholder = "username" type = "text">
<label> Mot de passe: </label>
<input id = "password" name = "password" placeholder = "**********" type = "password"> <br> <br>
<input name = "submit" type = "submit" value = "Login">
<span> <?php echo $error; ?> </span>
</form>
</div>
</body>
</html>