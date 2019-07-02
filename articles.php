<?php require_once 'inc/header.inc.php' ?>
<?php
$contenu = "";
// requete de selection on recupere les articles de la  BDD
$resultat = $bdd->query("SELECT * FROM articles");
while ($article = $resultat->fetch(PDO::FETCH_ASSOC)) {
    // On affiche la card via la variable $contenu 
    $contenu .= '<div class="card m-2" style="width: 18rem;">';
    $contenu .= '<div class="card-body">';
    $contenu .=  '<h5><a class="card-title" href="articlesBlog.php?idArticle=' . $article['idArticle'] . '">' . $article['title'] . '</a></h5>';
    $contenu .=  '<p class="card-text text-justify">' . $article['content'] . '</p>';
    // $contenu .=  '<a href="#" class="btn btn-outline-info">Lire</a>';
    $contenu .= '</div>';
    $contenu .= '</div>';
}
?>
<section class="container">
    <div class="row">
        <?= $contenu; ?>
    </div><!--  Fin row -->
</section>
<?php require_once 'inc/footer.inc.php' ?>