<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Lien CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Lien CSS personel -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container"><!-- debut div Classcontainer -->
  <header class="row"><!-- Debut class header -->
        <nav class="navbar navbar-expand-lg navbar-light logo"><!-- Debut navbar collaps -->
           <img src="../img/logoFaviconAlpha.png" alt="">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav"><!-- Debut nav collaps -->

             <ul class="navbar-nav mt-4"><!-- debut ul -->
               <li class="nav-item active">
                 <a class="nav-link"><p>23 rue de la folie Méricourt</p>
                 <p>75011 Paris</p></a>
               </li>

               <li class="nav-item active">
                 <a class="nav-link"><p>23 rue de la folie Méricourt</p>
                 <p>75011 Paris</p></a>
               </li>
               
               <li class="nav-item">
                 <a class="nav-link"><p>Hypno-thérapeute</p>
                 <p>humaniste</p></a>
               </li>

               <li class="nav-item">
                 <a class="nav-link" href="#"><span class="border border-light rounded-pill btn hover">Prendre un RDV</span></a>
               </li>

               <li class="nav-item">
                 <a class="nav-link" ><span class="border border-light rounded-pill btn hover">07 01 02 03 01</span></a>
               </li><!-- dFin ul -->
           </div><!-- fin nav collaps -->
           
        </nav><!-- fin navbar collaps --> 
      </div><!-- fin divClasscontainer -->
            <!-- ma 2éme Nav qui sera appelé Jquery   -->
      <div class="row">
        <nav id="nav2">
            <ul class=>
              <li><a href="#" ><span class="border border-light rounded-pill btn hover" class="rounded-pill">Qui</span></a></li>
              <li><a href="#" ><span class="border border-light rounded-pill btn hover" class="rounded-pill">Seance</span></a></li>
              <li><a href="#" ><span class="border border-light rounded-pill btn hoer"  class="rounded-pill">Blog</span></a></li>
              <li><a href="#" ><span class="border border-light rounded-pill btn hover" class="rounded-pill">Temoignage</span></a></li>
            </ul>
            <span class="navbar-toggler-icon"></span>
       </nav>
    </div>

  </header><!-- fin class header -->
<?php require_once 'footer.inc.php' ?>