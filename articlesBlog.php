<?php require_once 'inc/header.inc.php'; ?>
<?php
$contenu = "";

// On verifie si 'idArticle' existe bien si oui on prepare une requete de selection 
if (isset($_GET['idArticle']) && $_GET['idArticle'] = $_GET['idArticle']) {   // requete prepare de selection  qui permet de securisé les requetes
    $resultat = $bdd->prepare("SELECT * FROM articles WHERE idArticle = :idArticle");
    $resultat->bindValue(':idArticle', $_GET['idArticle'], PDO::PARAM_STR);
    $resultat->execute();
    //    Boucle qui retourne le resultat de la variable $article  
    while ($article = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // On  affiche la card via la variable contenu
        $contenu .= '<div class="card m-5 col-md-12  style="width: 18rem;">';
        $contenu .= '<div class="card-body">';
        $contenu .=  '<h5><a class="card-title" href="articlesBlog.php?idArticle=1&title=Qu\'est-ce que le Lorem Ipsum?' . $article['idArticle'] . '">' . $article['title'] . '</a></h5>';
        $contenu .=  '<p class="card-text text-justify">' . $article['content'] . '</p>';
        $contenu .=  '<a href="' . $article['link'] . 'target="_blank" class="btn btn-outline-info">Source</a>';
        $contenu .= '</div>';
        $contenu .= '</div>';
    }
}
?>
<section class="container">

    <div class="row">
        <?php echo $contenu; ?>

    </div>

    </div><!--  Fin row -->
</section>





<?php require_once 'inc/footer.inc.php' ?>