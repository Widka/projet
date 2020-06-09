<?php

function comparerNb ($nombre1, $nombre2, $nombre3)
{
    if ( ($nombre1 < $nombre2) && ($nombre1 < $nombre3) )
    {
        $resultat = $nombre1;
    }
    else if ( ($nombre2 < $nombre1) && ($nombre2 < $nombre3) )
    {
        $resultat = $nombre2;
    }
    else
    {
        $resultat = $nombre3;
    }
    return $resultat;
}

$min = comparerNb (1, 2, 3);

echo $min;