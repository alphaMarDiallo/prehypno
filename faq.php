<?php require_once 'inc/header.inc.php' ?>
<?php
//  Variable formulaire Faq
$faqFirstNameError = '';
$faqLastNameError = '';
$faqEmailError = '';
$faqMessageError = '';
$faqMsgValidate = '';

extract($_POST);

//  Traitement php du formulaire Faq

if ($_POST) {
    //1 - JE VERIFIE MES CHAMPS
    if (empty($faqFirstName) || iconv_strlen($faqFirstName) < 2 ||  iconv_strlen($faqFirstName) > 60) {
        $faqFirstNameError .= '<small class="text-danger"> ** Saisissez un prenom entre 2 et 60 clastéres</small>';
    }
    if (empty($faqLastName) || iconv_strlen($faqLastName) < 2 ||  iconv_strlen($faqLastName) > 60) {
        $faqLastNameError .= '<small class="text-danger"> ** Saisissez un nom entre 2 et 60 clastéres</small>';
    }
    if (empty($faqEmail) || !filter_var($faqEmail, FILTER_VALIDATE_EMAIL)) {
        $faqEmailError .= '<small class="text-danger"> ** Saisissez un email </small>';
    }
    if (empty($faqMessage) || iconv_strlen($faqMessage) < 5 || iconv_strlen($faqMessage) > 200) {
        $faqMessageError .= '<small class="text-danger"> ** Saisissez un message entre 5 et 200 clastéres</small>';
    }
    // Insertion en base de données
    if (empty($faqFirstNameError) && empty($faqLastNameError) && empty($faqEmailError) && empty($faqEmailError)) {
        // assainissement des données du formulaire
        foreach ($_POST as $indice => $valeur) {
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        } // Fin foreach

        // Requete d'insertion 
        $newQuestion = $bdd->prepare("INSERT INTO faq (faqFirstName, faqLastName, faqEmail, faqMessage) VALUES (:faqFirstName, :faqLastName, :faqEmail, :faqMessage)");

        $newQuestion->bindValue(":faqFirstName", $faqFirstName, PDO::PARAM_STR);
        $newQuestion->bindValue(":faqLastName", $faqLastName, PDO::PARAM_STR);
        $newQuestion->bindValue(":faqEmail", $faqEmail, PDO::PARAM_STR);
        $newQuestion->bindValue(":faqMessage", $faqMessage, PDO::PARAM_STR);
        $newQuestion->execute();

        $faqMsgValidate .= '<div class="alert alert-success">votre question a bien été envoyé. </div>';
        // // Envoi d'email
        // if(isset($_POST) && !empty($_POST['faqFirstName']) && !empty($_POST['faqLastName']) && !empty($_POST['faqEmail']) && !empty($_POST['faqMessage']))
        // {
        //     $mail = mail($faqFirstName, $faqLastName, $faqMessage, $faqEmail,$faqMessage, 'De nelson.vanicatte@gmail.com', )
        // } // Fin du if 

    } // Fin if(empty())
} // Fin if($_POST)       

?>
<div class="container">
    <!--formulaire pour question-->
    <h4 class="col m-4">Je suis à votre écoute :</h4>
    <?php echo $faqMsgValidate; ?>
    <form class="col m-4" method="POST" action="faq.php">
        <div class="row">
            <div class="col">
                <?php echo $faqFirstNameError; ?>
                <input type="text" name="faqFirstName" class="form-control text-center rounded-pill m-1"
                    placeholder="Prénom">
            </div>
            <div class="col">
                <?php echo $faqLastNameError; ?>
                <input type="text" name="faqLastName" class="form-control  text-center rounded-pill m-1"
                    placeholder="Nom">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php echo $faqEmailError; ?>
                <input type="text" name="faqEmail" class="form-control  text-center rounded-pill m-1"
                    placeholder="Votre@email.fr">
            </div>
        </div>
        <?php echo $faqMessageError; ?>
        <textarea name="faqMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <input type="submit" class="text-center btn-block btn-success rounded-pill m-1" value="Envoyer"
            onclick="validation_avt_envoi()" ;>
    </form>


    <!--FIN formulaire pour question-->



</div>
<?php require_once 'inc/footer.inc.php' ?>