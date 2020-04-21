<?php

// ici on écris notre code de traitement de tableaux PHP
// mon code PHP dois charger le bon fichier Data en fonction de la demande qu'il reçoit
$name = $_GET['query'];

$dataSource = "{$name}.php";

// je recupère le fichier correspondant

require_once "data/{$dataSource}";

// je fais mon traitement et je retourne la réponse au format JSON

if("glossary" === $name) {
    $index = mt_rand(0, count($glossary)-1); //prend en parametre un min et un max et retourne un entier aléatoire

    // je fais un écho du resultat pour récupéré en AJAX
    $result = $glossary[$index];
    echo json_encode([
        'data' => $result,
    ]);
}
if("practice" === $name) {
    $index = mt_rand(0, count($practices)-1); //prend en parametre un min et un max et retourne un entier aléatoire

    // je fais un écho du resultat pour récupéré en AJAX
    $result = $practices[$index];
    echo json_encode([
        'data' => $result,
    ]);
}


