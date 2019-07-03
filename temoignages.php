<?php require_once 'inc/header.inc.php' ?>
<?php
// Variable d'affichages 
$contenu = "";
//  récuperation des données de la table testimony 
$resultat = $bdd->query("SELECT * FROM testimony");
while ($testimony = $resultat->fetch(PDO::FETCH_ASSOC)) {
    $contenu .= '<div class="col-md-6">';
    $contenu .= '<div class="card m-2">';
    $contenu .= '<div class="card-body">';
    // $contenu .= '<h5 class="card-title">Special title treatment</h5>';
    $contenu .= '<p class="card-text text-justify">' . $testimony['testimony'] . '</p>';
    $contenu .= '<em class="offset-8 font-italic"> ' . $testimony['tFirstName'] . ' ' . $testimony['tLastName'] . '</em>';
    $contenu .= '</div>';
    $contenu .= '</div>';
    $contenu .= '</div>';
}

?>
<a href="form_temoignage.php?page=formTemoignage"
    class="col-md-2 offset-7 mb-5 mt-5 btn rounded-pill hover display">Laisser
    un
    témoignages</a>
<div class="container">
    <div class="row">
        <?php echo $contenu; ?>
    </div>

    <!-- Fin class Row -->

</div>
<?php require_once 'inc/footer.inc.php' ?>