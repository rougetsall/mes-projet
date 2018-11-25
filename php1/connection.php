<?php


define('LOGIN', 'root');
define('PASS', 'root');
define('HOST', 'localhost:8889');
define('DB', 'BB_SCO');
try{
 $connexion  = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8" , LOGIN, PASS);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "COOL";

}
catch(PDOException $e){
  echo "echec connexion  ".$e->getmessage();

}
?>



