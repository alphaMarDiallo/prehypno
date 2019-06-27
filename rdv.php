<?php require_once 'inc/header.inc.php' ?>

<div class="col-md-8 col-sm-12 col-12 order-md-5">
    <h4 class="col m-4">prenez un rendez-vous :</h4>
    <form class="col m-4">
        <div class="row">
            <div class="col">
                <input type="text" name="firstName" class="form-control text-center rounded-pill m-1"
                    placeholder="Prénom">
            </div>
            <div class="col">
                <input type="text" name="lastName" class="form-control  text-center rounded-pill m-1" placeholder="Nom">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="adress" class="form-control  text-center rounded-pill m-1"
                    placeholder="Adresse">
            </div>
            <div class="col">
                <input type="text" name="zipCode" class="form-control  text-center rounded-pill m-1"
                    placeholder="Code postal">
            </div>
            <div class="col">
                <select id="inputState" name="country" class="form-control  text-center rounded-pill m-1">
                    <option selected>Pays...</option>
                    <option value="fr">France</option>
                    <option value="be">Belgique</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="phone" class="form-control text-center rounded-pill m-1"
                    placeholder="Téléphone">
            </div>
            <div class="col">
                <input type="text" name="birthDate" class="form-control text-center rounded-pill m-1"
                    placeholder="date de naissance">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="email" class="form-control text-center rounded-pill m-1"
                    placeholder="Votre@email.fr">
            </div>
        </div>
        <input type="submit" class="text-center btn-block btn-success rounded-pill m-1" value="Envoyer">
    </form>
    <!--FIN form RDV-->
    <!--formulaire pour question-->
    <h4 class="col m-4">Je suis à votre écoute :</h4>
    <form class="col m-4">
        <div class="row">
            <div class="col">
                <input type="text" name="faqFirstName" class="form-control text-center rounded-pill m-1"
                    placeholder="Prénom">
            </div>
            <div class="col">
                <input type="text" name="faqLastName" class="form-control  text-center rounded-pill m-1"
                    placeholder="Nom">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="text" name="faqEmail" class="form-control  text-center rounded-pill m-1"
                    placeholder="Votre@email.fr">
            </div>
        </div>
        <textarea name="faqMessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <input type="submit" class="text-center btn-block btn-success rounded-pill m-1" value="Envoyer">

    </form>
    <!--FIN formulaire pour question-->

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
            <tr>
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
            <tr>
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
    <!-- <ul class="m-2">
        
      
        <span class="fas fa-arrow-circle-right m-1"></span> (80 €)
        <span class="fas fa-arrow-circle-right m-1"></span> (80 €)
        class="fas fa-arrow-circle-right m-1"></span> (80 €)
        <span class="fas fa-arrow-circle-right m-1"></span>Problème de relation avec l'autre (80 €)</li>
        <span class="fas fa-arrow-circle-right m-1"></span> (80 €)
        <span class="fas fa-arrow-circle-right m-1"></span> (80 €)
        <span class="fas fa-arrow-circle-right m-1"></span> (80 €)
    </ul> -->
    <ul>
        <li><span>Si vous avez des questions utilisez le formulaire</span><i
                class="far fa-hand-point-right ml-2"></i></i></li>
    </ul>
    <img src="img/logoFavIconAlpha.png" alt="logo" class="col-md-4 m-2" style="height:100px;width:100px">
</div>

</div>






<!--FIN .row-->









<?php require_once 'inc/footer.inc.php' ?>