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
    <h1 class="text-center">Accueil admin</h1>
    <a href="?action=deconnexion" class="admin-btn btn-danger rounded-pill offset-10">Deconnexion</a>
    <div class="container">
        <div class="card offset-2 mt-5" style="width: 50rem;">
            <ul class="list-group list-group-flush">
                <a href="gestion_article.php">
                    <li class="secondary list-group-item text-center btn-outline-secondary hover">Gestion des articles
                    </li>
                </a>
                <a href="gestion_clients.php">
                    <li class="info list-group-item text-center btn-outline-info hover">Gestion des clients</li>
                </a>
                <a href="gestion_temoignage.php">
                    <li class="primary list-group-item text-center btn-outline-primary hover">Gestion des temoignages
                    </li>
                </a>
            </ul>
        </div>
    </div>

    </div>
</body>

</html>