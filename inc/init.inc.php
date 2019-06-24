<?php
// Connexion a la base de donnée "hypnohumaniste"

$bdd = new PDO('mysql:host=localhost;dbname=hypnohumaniste', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));