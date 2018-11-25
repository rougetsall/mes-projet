<?php

  $serveur = "localhost";
  $login = "root";
  $pass= "root";

  $connexion  =new PDO("mysql:host=$serveur;dbname=xalis",$login,$pass) ;

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // $connexion -> exec("CREATE DATABASE test");



?>