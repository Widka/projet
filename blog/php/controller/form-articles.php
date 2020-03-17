<?php

function filtrer($name="id")
{
    $resultat = $_REQUEST[$name] ?? "";
    return $resultat;
}

$identifiantFormulaire = filtrer("identifiantFormulaire");

if ($identifiantFormulaire == "create")
{
    $tabAssoColonneValeur = [
        "titre"            => filtrer("titre"),
        "contenu"          => filtrer("contenu"),
        "image"            => filtrer("image"),
        "datePublication"  => filtrer("datePublication"),
        "categorie"        => filtrer("categorie"),
    ];
    extract($tabAssoColonneValeur);

    if ($titre != "" 
            && $contenu != ""
            && $image != ""
            && $datePublication != ""
            && $categorie != "")
    {
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
    else
    {
        echo "Veuillez remplir tous les champs obligatoires";
    }
}
if ($identifiantFormulaire == "delete")
{
    
    $tabAssoColonneValeur = [
        "id"            => filtrer("id"),
    ];
    extract($tabAssoColonneValeur);
    
    $id = intval($id);

    if ($id > 0)
    {
        
        $requeteSQL   =
<<<CODESQL

DELETE FROM articles
WHERE id = :id

CODESQL;

        require_once "php/model/envoyer-sql.php";

       
        echo "Votre article a bien été supprimé ($requeteSQL)";

    }
    else
    {
        
        echo "Merci de ne pas sombrer du coté obscur";
    }

}
if ($identifiantFormulaire == "update")
{
    $tabAssoColonneValeur = [
        "id"               => filtrer("id"),
        "titre"            => filtrer("titre"),
        "contenu"          => filtrer("contenu"),
        "image"            => filtrer("image"),
        "datePublication"  => filtrer("datePublication"),
        "categorie"        => filtrer("categorie"),
    ];
    
    extract($tabAssoColonneValeur);
    
    if ($id != ""                   
        && $titre != "" 
        && $contenu != ""
        && $image != ""
        && $datePublication != ""
        && $categorie != "")
    {
        $requeteSQL   =
<<<CODESQL

UPDATE articles 
SET 
    titre           = :titre,
    contenu         = :contenu,
    image           = :image,
    datePublication = :datePublication,
    categorie       = :categorie
WHERE 
    id = :id;


CODESQL;


    
        require_once "php/model/envoyer-sql.php";

        
        echo "Votre article à bien été modifié ($requeteSQL)";

    }

}