<?php 

function calculerPetit ($nombre1, $nombre2)
{
    if ($nombre1 < $nombre2)
    {
        $resultat = $nombre1;
    }
    else 
    {
        $resultat = $nombre2;


    }
    return $resultat;
}



$min = calculerPetit ( 20, 6);

echo $min;

$min = calculerPetit ( 9, 12);

echo $min;