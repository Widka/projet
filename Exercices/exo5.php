<?php

function calculerSurface ($longueur, $largeur, $hauteur)
{
    $surfaceMur = $longueur * $hauteur * 2 + $largeur * $hauteur * 2;
    // AUTRE SOLUTION POSSIBLE
    // $surfaceMur = 2 * $hauteur * ($longueur + $largeur);

    return $surfaceMur;
}

$surfaceMur = calculerSurface (5, 4, 3);
echo $surfaceMur;