<?php require_once 'inc/header.inc.php';
extract($_POST);
// Variable d'affichage formulaire rdv
$firstNameError = '';
$lastNameError = '';
$adressError = '';
$zipCodeError = '';
$countryError = '';
$phoneError = '';
$birthDateError = '';
$villeError = '';
$emailError = '';
$msgValidate = '';


if ($_POST) {

    // Verification des champs du formulaire 
    if (empty($firstName) || iconv_strlen($firstName) < 2 ||  iconv_strlen($firstName) > 60) {
        $firstNameError .= '<small class="text-danger"> ** Saisissez un prenom entre 2 et 60 clastéres</small>';
    }
    if (empty($lastName) || iconv_strlen($lastName) < 2 ||  iconv_strlen($lastName) > 60) {
        $lastNameError .= '<small class="text-danger"> ** Saisissez un prenom entre 2 et 60 caractéres</small>';
    }

    if (empty($adress) || iconv_strlen($adress) < 4 ||  iconv_strlen($adress) > 60) {
        $adressError .= '<small class="text-danger"> ** Saisissez un prenom entre 4 et 100 caractéres</small>';
    }
    if (empty($zipCode) || !preg_match('#^[0-9]{5}+$#', $zipCode)) {
        $zipCodeError .= '<small class="text-danger"> ** saisissez un code-postal valide</small>';
    }
    if ($country != "fr" && $country != "be" || $country == "") {
        $countryError .= '<small class="text-danger"> ** saisissez un code-postal valide</small>';
    }
    if (empty($phone) || !preg_match('#^[0-9]{10}+$#', $phone)) {
        $phoneError .= '<small class="text-danger"> ** saisissez un numéro  valide</small>';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError .= '<small class="text-danger"> ** Votre email n\'est pas valide</small>';
    }
    // Insertion en base de données
    if (empty($firstNameError) && empty($lastNameError) && empty($adressError) && empty($zipCodeError) && empty($countryError) && empty($phoneError) && empty($emailError)) {
        // assainissement des données du formulaire
        foreach ($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        }
        // Requete d'insertion 
        $newClient = $bdd->prepare("INSERT INTO clients(firstName, lastName, adress, zipCode, country, phone, email) VALUES (:firstName, :lastName, :adress, :zipCode, :country, :phone, :email)");

        // foreach($_POST as $key => $value)
        // {
        //     $newClient->bindValue(":$key", $value, PDO::PARAM_STR);
        // }
        $newClient->bindValue(":firstName", $firstName, PDO::PARAM_STR);
        $newClient->bindValue(":lastName", $lastName, PDO::PARAM_STR);
        $newClient->bindValue(":adress", $adress, PDO::PARAM_STR);
        $newClient->bindValue(":country", $country, PDO::PARAM_STR);
        $newClient->bindValue(":email", $email, PDO::PARAM_STR);
        $newClient->bindValue(":phone", $phone, PDO::PARAM_INT);
        $newClient->bindValue(":zipCode", $zipCode, PDO::PARAM_INT);
        $newClient->execute();

        $msgValidate = '<div class="alert alert-success">votre prise de rendez-vous  à bien été enregistré. </div>';
    }
} // Fin du if($_POST)

?>
<div class="row offset-2">
    <div class="col-md-8 col-sm-12 col-12 order-md-5">
        <h4 class="col m-4">prenez un rendez-vous :</h4>
        <?php echo   $msgValidate; ?>
        <form class="col m-4" method="POST">
            <div class="row">
                <div class="col">
                    <?php echo $firstNameError; ?>
                    <input type="text" name="firstName" class="form-control text-center rounded-pill m-1"
                        placeholder="Prénom">
                </div>
                <div class="col">
                    <?php echo $lastNameError; ?>
                    <input type="text" name="lastName" class="form-control  text-center rounded-pill m-1"
                        placeholder="Nom">
                    <label for="lastName">Nom</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $adressError; ?>
                    <input type="text" name="adress" class="form-control  text-center rounded-pill m-1"
                        placehoder="Adresse">
                </div>
                <div class="col">
                    <?php echo $zipCodeError; ?>
                    <input type="text" name="zipCode" class="form-control  text-center rounded-pill m-1"
                        placeholder="Code postal">
                </div>
                <div class="col">
                    <?php echo $countryError; ?>
                    <select id="inputState" name="country" class="form-control  text-center rounded-pill m-1">
                        <option selected value="">Pays...</option>
                        <option value="fr">France</option>
                        <option value="be">Belgique</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $phoneError; ?>
                    <input type="text" name="phone" class="form-control text-center rounded-pill m-1"
                        placeholder="Téléphone">

                </div>

                <div class="col">
                    <?php echo $birthDateError; ?>
                    <input type="text" name="birthDate" class="form-control text-center rounded-pill m-1"
                        placeholder="date de naissance">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $emailError; ?>
                    <input type="text" name="email" class="form-control text-center rounded-pill m-1"
                        placeholder="Votre@email.fr">

                </div>
            </div>
            <input type="submit" class="text-center btn-block btn-success rounded-pill m-1" value="Envoyer">
        </form>
        <!--FIN form RDV-->

    </div>

    <!--Colonne de gauche-->

    <div class="col-md-4 col-sm-12 col-12  order-md-1">
        <h6>Anne-Cécile ROUGIER</h6>
        <span class="mb-5">23 rue de la folie Méricourt-75011 Paris</span>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7704676860394!2d2.3711157156745233!3d48.86258717928785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfb861f8079%3A0x3d12cedc238537f8!2s23+Rue+de+la+Folie+M%C3%A9ricourt%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1561459143499!5m2!1sfr!2sfr"
            width="250" height="150" frameborder="0" style="border:0" allowfullscreen class="mt-2"></iframe>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">consultation</th>
                    <th scope="col">tarifs</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
                <td> Gestion du poids</td>
                <td rowspan=8 class="text-center">80 €</td>

                </tr>
                <tr>
                    <td>Thérapie de couple</td>
                </tr>
                <tr>
                    <td>Problèmes comportementaux</td>
                </tr>
                <tr>
                    <td>Problème de relation avec soi</td>
                </tr>
                <tr>
                    <td>Problème de relation avec l'autre</td>
                </tr>
                <tr></tr>
                <td>Problème physiologique</td>
                </tr>
                <tr>
                    <td>Suivi de consultation</td>
                </tr>
                <tr>
                    <td>Autre</td>
                </tr>
                <tr>
                    <td>Arrêt du tabac</td>
                    <td> 120 €</td>
                </tr>
            </tbody>
        </table>

        <ul>
            <li><span>Si vous avez des questions utilisez le formulaire :</span>
                <a href="faq.php?page=faq">Cliquez ici</a>
        </ul>
        <img src="img/logoFavIconAlpha.png" alt="logo" class="col-md-4 m-2" style="height:100px;width:100px">

    </div>
</div>
</div>

<!--FIN .row-->

<?php require_once 'inc/footer.inc.php' ?>