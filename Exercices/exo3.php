<?php

function trouverPetit ($tabNombre)
{
    $plusPetit = $tabNombre[0];
    foreach($tabNombre as $nombre)
    {
        if ($nombre < $plusPetit)
        {
            $plusPetit = $nombre;
        }
    }
    return $plusPetit;
}

$tab = ([10, 20, 20]);

echo trouverPetit($tab);