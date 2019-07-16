<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    session_destroy();
    header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lien CSS BoutStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Lien css -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Document</title>
</head>

<body>
    <a href="?action=deconnexion" class="admin-btn btn-danger rounded-pill offset-10 mt-2
    ">Deconnexion</a>
    <h1 class="text-center mb-5">Accueil admin :</h1>
    <div class="container">
        <!-- <div class="card cardAdmin offset-md-2" style="width:30rem;">
            <ul class="list-group list-group-flush">
                <li class="secondary list-group-item text-center  hover">
                    <a href="gestion_article.php" class="btn-outline-secondary">Gestion des articles</a>
                </li>
                <li class="info list-group-item text-center  hover">
                    <a href=" gestion_clients.php" class="btn-outline-info">Gestion des clients</a>
                </li>
                <li class="primary list-group-item text-center hover">
                    <a href="gestion_temoignage.php" class="btn-outline-primary ">Gestion des temoignages</a>
                </li>
            </ul>
        </div> -->
        <div class="list-group listAdmin " style="width:30rem;">
            <a href="gestion_article.php"
                class="list-group-item list-group-item-action secondary text-center hover btn-outline-secondary">Gestion
                des
                articles</a>
            <a href="gestion_clients.php"
                class="list-group-item list-group-item-action info text-center btn-outline-info hover">Gestion
                des clients</a>
            <a href="gestion_temoignage.php"
                class="list-group-item list-group-item-action primary text-center btn-outline-primary  hover">Gestion
                des
                temoignages</a>

        </div>
    </div>

    </div>
</body>

</html>