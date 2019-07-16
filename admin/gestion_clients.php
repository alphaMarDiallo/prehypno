<?php
// II - JE ME CONNECT A MA BDD 
require_once '../inc/init.inc.php';
// Je déclare ma variable d'affichage
$contenu = "";

// III - JE PASSE AU TRAITEMENT PHP :
// a/ récupération des infos en BDD
$resultat = $bdd->query('SELECT idClient, firstName, lastName, email, phone, date_rdv, time_rdv FROM clients');

// b/ j'affiche les données de mon tableau "$resultat" avec une boucle while pour parcourir ma table clients :
while ($client = $resultat->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<tr>';
    $contenu .= '<th scope ="row " class="text-center">' . $client['idClient'] . '</th>';
    $contenu .= '<td class="text-center">' . $client['firstName'] . '</td>';
    $contenu .= '<td class="text-center">' . $client['lastName'] . '</td>';
    $contenu .= '<td class="text-center">' . $client['email'] . '</td>';
    $contenu .= '<td class="text-center">' . $client['phone'] . '</td>';
    $contenu .= '<td class="text-center">' . $client['date_rdv'] . '</td>';
    $contenu .= '<td class="text-center">' . $client['time_rdv'] . '</td>';
    $contenu .= '<td class="text-center"><a href="form_client.php?action=modif&id=' . $client['idClient'] . '"><i class="far fa-edit text-warning fa-2x"></i></a></td>';
    $contenu .= '<td  scope="col" class="text-center"><a href="?action=suppression&id=' . $client['idClient'] . '" onclick="return confirm(\'Etes-vous sûr ?\');"><i
    class="fas fa-trash-alt fa-2x text-danger"></i></a></td>';
    $contenu .= '</tr>';
}

?>
<!-- I - JE M'OCCUPE DE MON FRONT -->
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

        <h1 class="display-4 text-center mb-5"> Liste des rendez-vous :</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="accueil_admin.php" class="return btn btn-outline-dark" title="retour">
                    <i class="far fa-hand-point-left fa-2x"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="offset-10 mb-5 btn btn-outline-dark" href="form_client.php" title="ajouter un RDV">
                    <i class="fas fa-pencil-alt fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col-md-2" class="text-center">N° client</th>
                        <th scope="col-md-2" class="text-center">Prénom</th>
                        <th scope="col-md-2" class="text-center">Nom</th>
                        <th scope="col-md-2" class="text-center">Email</th>
                        <th scope="col-md-2" class="text-center">Téléphone</th>
                        <th scope="col-md-2" class="text-center">Date rdv</th>
                        <th scope="col-md-2" class="text-center"> heure rdv</th>
                        <th colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php echo  $contenu; //j'affiche les données contenu dans la boucle while en faisant un echo de ma variable d'affichage "$contenu" 
                    ?>
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