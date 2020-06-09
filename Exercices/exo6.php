<?php

function additionner ($tabNombre)
{
    $resultat = 0;
    foreach($tabNombre as $nombre)
    {
        // =+ ÉQUIVALENT A $nombre + $nombre ...
        $resultat += $nombre;
    }
    return $resultat;
}

$somme = additionner([2, 4, 6, 8]);
echo $somme;