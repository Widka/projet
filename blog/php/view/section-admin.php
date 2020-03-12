<section>
    <h2>Formulaire de création d'Articles</h2>
    <input type="text" name="titre" required placeholder="Entrez le titre">
    <textarea name="contenu" cols="60" rows="8" required placeholder="Entrez le contenu"></textarea>
    <input type="text" name="image" required value="assets/img/photo1.jpg">
    <input type="datetime" name="datePublication" id="datePublication">
    <input type="text" name="catégorie" required placeholder="Entrez la catégorie">
    <button type="submit">Publier l'article</button>
    <div class="confirmation">
    <?php
    require_once "php/controller/form-article.php"
    ?>
    </div>
</section>
