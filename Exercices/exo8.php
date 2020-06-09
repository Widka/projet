<?php

function concatenerTexte($tabLettre)
{
    $resultat = "";

    foreach($tabLettre as $indice => $lettre)
    {
        if ($indice > 0)
        {
            $resultat = "$resultat," . "$lettre";
        }
        else
        {
            $resultat = "$resultat" . "$lettre";
        }
    }
    return $resultat;
}

$texteConcatene = concatenerTexte(['a', 'b', 'c', 'd']);

echo $texteConcatene;