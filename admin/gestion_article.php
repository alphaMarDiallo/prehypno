<?php
require_once '../inc/init.inc.php';
// Variable d'affichage 
$contenu = "";

// $resultat -> me permet de récuperer ma table article. $resultat n'est pas exploitable dans l'etat.
$resultat = $bdd->query("SELECT * FROM articles");

// La boucle while qui veut dire "tant qu'il y a", permet de parcourir toutes les lignes de mon tableau article. La variable "$art", elle me permet de recuperer toutes les informations de mon tableau article. En crochetant "$art['indice que je souhaite utiliser']"
while ($art = $resultat->fetch(PDO::FETCH_ASSOC)) {
    // echo '<pre>'; print_r($art); echo '</pre>';
    $contenu .= '<tr>';
    $contenu .= '<th class="text-center">' . $art['idArticle'] . '</th>';
    $contenu .= '<td class="text-center">' . $art['title'] . '</td>';
    $contenu .= '<td class="text-justify">' . $art['content'] . '</td>';
    $contenu .= '<td class="text-center">' . $art['photo'] . '</td>';
    $contenu .= '<td class="text-center">' . $art['link'] . '</td>';
    $contenu .= '<td class="text-center"><a href="form_article.php?action=modif"><i class="far fa-edit text-warning fa-2x"></i></a></td>';
    $contenu .= '<td  scope="col" class="text-center"><a href="?action=suppression&id=' . $art['idArticle'] . '" onclick="return confirm(\'Etes-vous sûr ?\');"><i
    class="fas fa-trash-alt fa-2x text-danger"></i></a></td>';
    $contenu .= '</tr>';
}

// ---------------SUPPRESSION DE PRODUIT-----------------------
// Si mon action existe et que l'action est egale à la suppression et mon Id existe
// je lance ma requete de suppression, il faut if (isset($_GET['action'])+ && $_GET['action'] == 'suppression' && isset($_GET['id']))
if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id'])) {

    $article_delete = $bdd->prepare("DELETE FROM articles WHERE idArticle = :idArticle");
    // Je recupere l'Id qui se trouve dans l'URL
    $article_delete->bindValue(':idArticle', $_GET['id'], PDO::PARAM_INT);

    // Exo: requete de suppression article

    // echo 'suppression article';

    $article_delete->execute();

    $_GET['action'] = 'affichage'; // on rédirige vers l'affichage des produits
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lien CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Lien CSS personel -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <h1 class="display-4 text-center"> Liste des articles</h1>

        <div class="row">
            <div class="col-md-6">
                <a href="accueil_admin.php" class="return btn btn-outline-dark" title="retour">
                    <i class="far fa-hand-point-left fa-2x"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="offset-10 mb-5 btn btn-outline-dark" href="form_article.php" title="ajouter un RDV">
                    <i class="fas fa-pencil-alt fa-2x"></i>
                </a>
            </div>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col-md-2" class="text-center">N° client</th>
                    <th scope="col-md-2" class="text-center">Titre</th>
                    <th scope="col-md-2" class="text-center">Contenu</th>
                    <th scope="col-md-2" class="text-center">Photo</th>
                    <th scope="col-md-2" class="text-center">Lien</th>
                    <th colspan="2">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php echo $contenu; ?>

            </tbody>
        </table>
    </div>


    <!-- Lien CDN JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>