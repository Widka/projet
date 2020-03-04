<section>
            <h2>liste des articles EN PHP ET SQL (READ)</h2>
            <div class="listeArticle">
<?php

$requeteSQL = 
<<<CODESQL

SELECT * FROM articles
ORDER BY datePublication DESC

CODESQL;

$tabAssoColonneValeur = [];

require_once "php/model/envoyer-sql.php";

$tabLigne= $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{

extract($tabAsso);

<<<CODEHTML
 
<article class="$categorie">
      <img src="$image" alt="photo1">
        <h3>$titre</h3>
        <p>$contenu</p>
    </article>

CODEHTML;
}
?>