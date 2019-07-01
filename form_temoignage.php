<?php require_once 'inc/header.inc.php' ?>

<a href="#"><i class="fas fa-reply"></i></a>
<div class="container mt-5 offset-4">
    <!-- Formulaire témoignages  -->
    <form class="col-md-12 mt-5" method="post">
        <div class="row">

            <div class="form-group col-md-3 ">
                <label for="prenom"></label>
                <input type="text" class="form-control rounded-pill" name="tFirstName" placeholder="Prénom">
            </div>
            <!-- Fin case prénom -->


            <div class="form-group col-md-3">
                <label for="nom"></label>
                <input type="text" class="form-control rounded-pill" name="tLastName" placeholder="Nom">
            </div>
            <!-- Fin case nom -->
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        </div>

        <button type="submit" class="col-md-2 btn btn-outline-success btn-block mb-4 rounded-pill hover">Postez</button>
    </form>
</div>
<!--Fin de la Div container  -->
<?php require_once 'inc/footer.inc.php' ?>