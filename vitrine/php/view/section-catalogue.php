<section>
            <h2>Catalogue</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Veritatis laboriosam, deserunt inventore rem, 
                modi aliquid eligendi esse saepe excepturi commodi 
                quis a error ratione architecto impedit exercitationem
                illum consequuntur adipisci!</p>
                <img class="imagePrincipale" src="assets/img/voiture.jpg" alt="voiture">
                <div class="container">
                <?php

// JE DEMANDE A PHP DE RECUPERER LA LISTE DES FICHIERS QUI COMMENCE PAR galerie

$listeGalerie = glob("assets/img/car*.jpg");
foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>
<!--                
                <img src="assets/img/voiture1.jpg" alt="voiture1">
                <img src="assets/img/voiture2.jpg" alt="voiture2">
                <img src="assets/img/voiture3.jpg" alt="voitur3">
-->         
            </div>
        </section>