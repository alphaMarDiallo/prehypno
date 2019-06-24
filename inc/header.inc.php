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
<div class="container">
    <header class="row">
        <nav class="navbar navbar-expand-lg navbar-light logo" id="nav1">
  <!-- le logo signature -->
            <img src="../img/logoFavIconAlpha.png " alt="" class="m-4"> 
    <button class="navbar-toggler m-4" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item mt-4"> 
          <p>23 rue de la folie Méricourt</p>
          <p>75011 Paris</p>
      </li>
      <li class="nav-item m-4 mb-2">2eme adresse</li>
      <li class="nav-item text text-center mt-4">
         <p>Hypno-thérapeute</p>
          <p>humaniste</p>
      </li>
      <li class="nav-item text text-center">
        <a href="#" class="nav-link rounded-pill btn hover mt-3">Prendre un RDV</a>
      <li class="nav-item m-4">
        <a class="nav-link" href="#" >07 01 02 03 01</a>
      </li>
    </ul>
  </div>
</nav>
<nav id="nav2">
    <ul>
      <li><a href="#">Qui</a></li>
      <li><a href="#">Seance</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Temoignage</a></li>
    </ul>
    <a class="toggle-nav" href="#"></a>

</nav>
<main class="row">



<?php require_once 'footer.inc.php'?>