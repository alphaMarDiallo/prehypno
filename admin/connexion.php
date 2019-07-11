<?php
require_once("../inc/init.inc.php");
extract($_POST);
$adminEmailError = '';
$adminPwError = '';


// Petit 1 je recupere les information de la table Admin
$req = $bdd->query("SELECT * FROM admin");
$admin = $req->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';   print_r($_POST);  echo '</pre>'; 
// 2 Je verifie mets champs
if ($_POST) {
    if (empty($adminEmail) || !filter_var($adminEmail, FILTER_VALIDATE_EMAIL) && $adminEmail != $admin['adminEmail']) {
        $adminEmailError .=  '<small class="text-danger"> ** Saisissez un Email valide</small>';
    }
    if (empty($adminPw) ||  $adminPw != $admin['adminPw']) {
        $adminPwError .=  '<small class="text-danger"> ** Saisissez un mot de passe valide</small>';
    }
    // Si je n'est aucun message d'erreur qui s'affiche on redirige vers la page acceuil-admin.php 
    if (empty($adminEmailError) && empty($adminPwError)) {
        header('Location:accueil_admin.php');
    }
} // Fin du if($_POST)

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lien css -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <!-- Lien CSS BoutStrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Connexion</title>
    <script>

    </script>
</head>

<body>
    <h1 class="col-md-4 offset-md-4 mb-4 text-center">Connexion</h1>
    <form class="col-md-4 offset-md-4 mt-5 text-center form" method="Post">
        <?php echo  $adminEmailError; ?>
        </div>
        <input type="text" class="form-control rounded-pill text-center m-3 " name="adminEmail"
            placeholder="Votre@Email.com">
        </div>

        <!-- mdp -->
        <div class="form-group">
            <?php echo $adminPwError; ?>
            <input type="password" class="form-control rounded-pill text-center m-3 " name="adminPw"
                placeholder="Votre Mot de passe">
        </div>

        <!-- le bouton submit -->
        <!-- <a  >Connexion</a> -->
        <input type="submit" class="btn btn-primary rounded-pill hover">
    </form>

</body>

</html>