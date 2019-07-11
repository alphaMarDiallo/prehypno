<?php
require_once '../inc/init.inc.php';
/*Verification des champs du formulaire
-> parcourir dejà la BDD et repertorier les champs à utiliser
Table article 
_idArticle à ignorer 
_title -< pour le titre à mettre en anglais 
_content
*/
// Ici j'affiche les infos que récupère grâce à la methode "post" du formulaire. Ceci m'aide à voir que mon formulaire envoie bien les données saisies
echo '<pre style="background:DarkSlateGray ;color:white;" >';
var_dump($_POST);
echo '</pre>';
// je créé ma variable d'affichage
$msg_title = "";
$msg_content = "";
$msg_link = "";
$msg_photo = "";

// Je vérifie les champs de mon formulaire
if ($_POST) {

    // Je vérifie que chaque champs n'esxistent pas ou bien qu'il ne correspondent pas à ce que j'attend. Dans ce cas un message d'erreur sera affiché.
    if (empty($_POST['title']) || iconv_strlen($_POST['title']) < 2 || iconv_strlen($_POST['title']) > 200) {
        $msg_title .= '<span class="text-danger text-center"> ** Veuillez saisir votre titre entre 5 et 30 caractères</span>';
    } // FIN if (empty($_POST['title'])

    if (empty($_POST['link']) || !preg_match('#^(http|https)://[\w-]+[\w.-]+\.[a-zA-Z]{2,6}#i', $_POST['link'])) {
        $msg_link .= '<span class="text-danger text-center"> ** Veuillez mettre URL valide</span>';
    } // FIN if (empty($_POST['link'])

    if (empty($_POST['photo'])) {
        $msg_photo .= '<span class="text-danger text-center"> ** Veuillez mettre image valide</span>';
    }  // FIN if (empty($_POST['photo'])

    if (empty($_POST['content'])) {
        $msg_content .= '<span class="text-danger text-center"> ** Veuillez saisir votre article</span>';
    }  // FIN if (empty($_POST['content'])

    // si Je n'ai pas de message d'erreur j'effectue l'insertion à ma BDD 
    if (empty($msg_title || $msg_content || $msg_link || $msg_photo)) {
        // a) assainissement des saisies de l'intertnaute
        foreach ($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        }
        $requet = $bdd->prepare("INSERT INTO articles (title,content, link, photo) VALUES (:title,:content,:link, :photo)");

        // J'associe les les valeurs saisies dans le  formulaire avec les marqueurs de securité php (:title,:content,:link, :photo)")
        $requet->bindParam(':title', $_POST['title']);
        $requet->bindParam(':content', $_POST['content']);
        $requet->bindParam(':link', $_POST['link']);
        $requet->bindParam(':photo', $_POST['photo']);
        // J'éxecute l'insertion en BDD
        $requet->execute();
    } //Fin if (empty($msg_title || $msg_content || $msg_link || $msg_photo))

} //Fin de $_POST 
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
<div class="container">
    <h1 class="text text-center mb-5">Formulaire</h1>
    <a href="gestion_article.php" class="return" title="retour"><i
            class="fas fa-hand-point-left fa-2x text-dark"></i></a>
    <form class="col-md-6 offset-3" method="post">
        <div class="col" name="idArticle" value="">
            <input type="hidden">
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center ">
                <?= $msg_title; ?>
            </div>
            <div class="col">
                <input type="text" class="form-control text-center rounded-pill border border-primary" name="title"
                    placeholder="titre">
            </div>
        </div>
        <!-- photo -->
        <div class="row mt-3">
            <div class="col-md-12 text-center ">
            </div>
            <div class="col">
                <?= $msg_photo; ?>
                <label for="photo"></label>
                <input type="file" id="photo" aria-describedby="" name="photo">
            </div>
            <!-- Link -->
            <div class="col mt-2">
                <?= $msg_link; ?>
                <input type="text" class="form-control text-center rounded-pill border border-primary" name="link"
                    placeholder="link">
            </div>
            <!-- Content -->
        </div>
        <div class="mb-3 mt-3">
            <?= $msg_content; ?>
            <textarea class="form-control text-center border border-primary rounded" id="validationTextarea"
                name="content" placeholder="Contenu de l'article"></textarea>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit"
                    class="btn btn-lg btn-outlines-secondary border border-secondary hover rounded-pill">Validez</button>
            </div>
    </form>
</div>

<body>
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