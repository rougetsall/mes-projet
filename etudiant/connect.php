<?php

try{
  $serveur = "localhost";
  $login = "root";
  $pass= "root";

  $connexion  =new PDO("mysql:host=$serveur;dbname=SCOLARITE",$login,$pass) ;

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // $connexion -> exec("CREATE DATABASE test");

  echo "COOL";

}
catch(PDOException $e){
  echo "echec connexion ".$e->getmessage();

}
?>