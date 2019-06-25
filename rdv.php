
<?php require_once 'inc/header.inc.php'?>


<div class="row">
    <!--Colonne de gauche-->
    <div class="col-md-4 mt-5">
        <h6>Anne-Cécile ROUGIER</h6>
        <p>23 rue de la folie Méricourt</p>
        <p>75011</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.7704676860394!2d2.3711157156745233!3d48.86258717928785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfb861f8079%3A0x3d12cedc238537f8!2s23+Rue+de+la+Folie+M%C3%A9ricourt%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1561459143499!5m2!1sfr!2sfr" width="250" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        <ul>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Gestion du poids (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Arrêt du tabac ( 120 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Thérapie de couple (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Problèmes comportementaux (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Problème de relation avec soi (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Problème de relation avec l'autre (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Problème physiologique (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Autre (80 €)</li>
            <li><i class="fas fa-arrow-circle-right m-1"></i>Suivi de consultation (80 €)</li>
        </ul>
        <ul>
            <li <span>Si vous avez des questions utilisez le formulaire</span><i class="far fa-hand-point-right ml-2"></i></i></li>
        </ul>
        <img src="img/logoFavIconAlpha.png" alt="logo" class="col-md-12 m-2" style="height:100px;width:100px">
    </div>
    <!--formulaire de prise de RDV-->
    <div class="col-md-7 mt-5">
        <h4 class="col m-4">prenez un rendez-vous :</h4>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" name="firstName" class="form-control text-center rounded-pill m-1" placeholder="Prénom">
                </div>
                <div class="col">
                    <input type="text" name="lastName" class="form-control  text-center rounded-pill m-1" placeholder="Nom">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="adress" class="form-control  text-center rounded-pill m-1" placeholder="Adresse">
                </div>
                <div class="col">
                    <input type="text" name="zipCode" class="form-control  text-center rounded-pill m-1" placeholder="Code postal">
                </div>
                <div class="col">
                    <select id="inputState"name="country"  class="form-control  text-center rounded-pill m-1">
                        <option selected>Pays...</option>
                        <option value="fr">France</option>
                        <option value="be">Belgique</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="phone" class="form-control  text-center rounded-pill m-1" placeholder="Téléphone">
                </div>
                <div class="col">
                    <input type="text" name="birthDate" class="form-control  text-center rounded-pill m-1" placeholder="date de naissance">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" name="email" class="form-control  text-center rounded-pill m-1" placeholder="Votre@email.fr">
                </div>
            </div>
            <input type="submit" class="text-center rounded-pill m-1" value="Envoyer">
        </form> <!--FIN form RDV-->
        
        <!--formulaire pour question-->
        <h4 class="col m-4">Je suis à votre écoute :</h4>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" name="faqFirstName" class="form-control text-center rounded-pill m-1" placeholder="Prénom">
                </div>
                <div class="col">
                    <input type="text" name="faqLastName" class="form-control  text-center rounded-pill m-1" placeholder="Nom">
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <input type="text" name="faqEmail" class="form-control  text-center rounded-pill m-1" placeholder="Votre@email.fr">
                </div>
            </div>
            <textarea name="faqMessage"  cols="65" rows="5" class="rounded m-1" placeholder="Je vous écoute..."></textarea>
            <input type="submit" class="text-center rounded-pill m-1" value="Envoyer" >

        </form><!--FIN formulaire pour question-->
    </div>

</div> <!--FIN .row-->









<?php require_once 'inc/footer.inc.php'?>
