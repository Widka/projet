
<section class="container">
    <h2>Créer un Article</h2>
    <form id="create" class="admin" action="" method="POST">
        <input type="text" name="titre" required placeholder="Entrer le titre">
        <textarea name="contenu" cols="60" rows="8" required placeholder="Entrer le contenu"></textarea>
        <input type="text" name="image" required value="assets/img/photo1.jpg">
        <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        <input type="text" name="categorie" required placeholder="Entrez la catégorie">
        <input type="hidden" name="identifiantFormulaire" value="create">

        <button type="submit">Publier l'article</button>
        <div class="confirmation">
            <?php 
$identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
if ($identifiantFormulaire == "create")
{
    require "php/controller/form-articles.php"; 
}        
            ?>
        </div>
    </form>
</section>

<br>

<section class="updateSection cache">
    <button class="closePopup">Fermer la popup</button>
    <h2>Modifier un article (Update)</h2>
    <form id="update" class="admin" action="" method="POST">
        <div class="infosUpdate">
            <input type="text" name="titre" required placeholder="Entrer le titre">
            <textarea name="contenu" cols="60" rows="8" required placeholder="Entrer le contenu"></textarea>
            <input type="text" name="image" required value="assets/img/photo1.jpg">
            <input type="text" name="datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
            <input type="text" name="categorie" required placeholder="Entrez la catégorie">
            <input type="text" name="id" required placeholder="Entrez id ligne">
        </div>

        <input type="hidden" name="identifiantFormulaire" value="update">
        <button type="submit">Modifier l'article</button>
        <div class="confirmation">
        <?php 
$identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
if ($identifiantFormulaire == "update")
{
    require "php/controller/form-articles.php"; 
}        
            ?>
        </div>

    </form>
</section>

<section class="cache">
    <h2>Supprimer Article</h2>
    <form id="delete" action="" method="POST">
        <input type="text" name="id" required placeholder="Entrez id">
        <input type="hidden" name="identifiantFormulaire" value="delete">
        <button>Supprimer l'article</button>
        <div class="confirmation">
        <?php 
$identifiantFormulaire = $_REQUEST["identifiantFormulaire"] ?? "";
if ($identifiantFormulaire == "delete")
{
    require "php/controller/form-articles.php"; 
}        
            ?>
        </div>
    </form>    
</section>


<section class="container">
    <h2>Listes des Articles</h2>

    <table>
        <thead>
            
            <tr>
                <td>Id</td>
                <td>Titre</td>
                <td>Contenu</td>
                <td>Image</td>
                <td>Catégorie</td>
                <td>Modifier</td>
                <td>Supprimer</td>
            </tr>
        </thead>
        <tbody>
            
            <?php

$requeteSQL =
<<<CODESQL

SELECT * FROM `articles`
ORDER BY datePublication DESC

CODESQL;


$tabAssoColonneValeur = [];


require "php/model/envoyer-sql.php";

$tabLigne = $pdoStatement->fetchAll();

foreach($tabLigne as $tabAsso)
{
    extract($tabAsso); 

    echo
<<<CODEHTML

<tr>
    <td>$id</td>
    <td>$titre</td>
    <td>$contenu</td>
    <td>$image</td>
    <td>$categorie</td>
    <td>
        <button data-id="$id" class="update">Modifier</button>
        <!-- ON PEUT DONNER PLUSIEURS CLASSES A UNE BALISE -->
        <div class="infosUpdate cache">
            <input type="text" name="titre" required placeholder="entrer le titre" value="$titre">
            <textarea name="contenu" cols="60" rows="8" required placeholder="entrer le contenu">$contenu</textarea>
            <input type="text" name="image" required value="$image">
            <input type="text" name="datePublication" value="$datePublication">
            <input type="text" name="categorie" required placeholder="entrez la catégorie" value="$categorie">
            <input type="text" name="id" required placeholder="entrez id ligne" value="$id">
        </div>

    </td>  
    <td><button data-id="$id" class="delete">Supprimer</button></td>  
</tr>

CODEHTML;
}


?>
        </tbody>
    </table>
</section>


<script>
var boutonClose = document.querySelector("button.closePopup");
boutonClose.addEventListener("click", function(){
    var baliseSectionUpdate = document.querySelector("section.updateSection");
    baliseSectionUpdate.classList.add("cache");
});

var listeBoutonUpdate = document.querySelectorAll("button.update");
listeBoutonUpdate.forEach(function(bouton){
    bouton.addEventListener("click", function(event){
        console.log("Clique sur Modifier");
        var baliseBouton = event.target;
        var baliseTd = baliseBouton.parentNode;
        var baliseUpdate = baliseTd.querySelector(".infosUpdate");

        console.log(baliseBouton);
        console.log(baliseTd);
        console.log(baliseUpdate);

        var baliseUpdateForm = document.querySelector("form#update div.infosUpdate");
        baliseUpdateForm.innerHTML = baliseUpdate.innerHTML;

        var baliseSection = document.querySelector(".updateSection");
        baliseSection.classList.remove("cache"); 
    });

});



var listeBoutonDelete = document.querySelectorAll("button.delete");
listeBoutonDelete.forEach(function(bouton){
    bouton.addEventListener("click", function(event){
        console.log("TU AS CLIQUE");
        var idBouton = event.target.getAttribute("data-id");
        console.log(idBouton);
        var champId = document.querySelector("form#delete input[name=id]");
        champId.value = idBouton;

        var confirmation = window.confirm("Es tu vraiment sur ?");
        if (confirmation)
        {
            var formDelete = document.querySelector("form#delete");
            formDelete.submit();
        }
        else
        {
        }
    });

});



</script>



