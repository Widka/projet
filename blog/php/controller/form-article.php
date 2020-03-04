<?php

if(count($_REQUEST) > 0)
{
$tabAssoColonneValeur = [
    "titre" => $_REQUEST["titre"],
    "contenu" => $_REQUEST["contenu"],
    "image" => $_REQUEST["image"],
    "datePublication" => $_REQUEST["datePublication"],
    "categorie" => $_REQUEST["categorie"],
];

    $requeteSQL =
<<<CODESQL

INSERT INTO articles
( titre, contenu, image, datePublication, categorie)
VALUES
( :titre, :contenu, :image, :datePublication, :categorie)

CODESQL;

require_once "php/model/envoyer-sql.php";

echo "Votre article à bien été publié !($requeteSQL)";
}