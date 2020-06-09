<?php

function compterPair($tabNombre)
{
    $compteur = 0;
    foreach($tabNombre as $nombre)
    {
        if (($nombre %2) == 0)
        {
            $compteur = $compteur + 1;
        }
    }
    
    return $compteur;
}

echo compterPair ([1, 2, 3, 4]);