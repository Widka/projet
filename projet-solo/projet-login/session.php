<?php
// La fonction mysqli_connect () ouvre une nouvelle connexion au serveur MySQL.
$conn = mysqli_connect ("localhost", "root", "", "login");
session_start(); // Démarrage de la session
// Stockage de session
$user_check = $_SESSION ['login_user'];
// Requête SQL pour récupérer les informations complètes de l'utilisateur
$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query ($conn, $query);
$row = mysqli_fetch_assoc ($ses_sql);
$login_session = $row ['username'];
?>