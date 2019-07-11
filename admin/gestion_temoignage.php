<?php
require_once("../inc/init.inc.php");

$contenu = "";

$resultat = $bdd->query("SELECT * FROM testimony");




while ($temoignage = $resultat->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<tr>';
    $contenu .= '<td scope="col" class="text-center">' . $temoignage['idTestimony'] . '</td>';
    $contenu .= '<td scope="col" class="text-center">' . $temoignage['tFirstName'] . '</td>';
    $contenu .= '<td scope="col" class="text-center">' . $temoignage['tLastName'] . '</td>';
    $contenu .= '<td scope="col" class="text-center">' . $temoignage['testimony'] . '</td>';
    $contenu .= '<td scope="col" class="text-center"><a href="?action=suppression&id=' . $temoignage['idTestimony'] . '"><i
                class="fas fa-trash-alt fa-2x text-danger"></i></a></td>';
    $contenu .= '</tr>';
}

// ---------------SUPPRESSION DE PRODUIT-----------------------
// Si mon action existe et que l'action est = a suppression et que mon id existe
if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id'])) {
    // Je lance ma requete de suppression
    $temoignage_delete = $bdd->prepare("DELETE FROM testimony WHERE idTestimony = :idTestimony");
    // Je récupere l'id qui se trouve dans l'URL
    $temoignage_delete->bindValue(":idTestimony", $_GET['id'], PDO::PARAM_INT);
    $temoignage_delete->execute();
    // $_GET['action'] = 'affichage'; // on redirige vers l'affichage des produits
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Lien CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Lien css -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Témoignage</h1>
        <a href="accueil_admin.php" class="return" title="retour"><i
                class="fas fa-hand-point-left fa-2x text-dark"></i></a>
        <a class="offset-11 mb-5 btn btn-outline-dark" href="connexion.php" title="ajouter un Témoignage"><i
                class="fas fa-pencil-alt fa-2x"></i></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">N° temoignage</th>
                    <th scope="col" class="text-center">Prénom</th>
                    <th scope="col" class="text-center">Nom </th>
                    <th scope="col" class="text-center">Temoignage</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>

            <?php echo $contenu; ?>
        </table>
    </div>
    </div>
    <!--Fin div container  -->

</body>

</html>