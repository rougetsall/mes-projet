<?php

define('LOGIN', 'root');
define('PASS', 'root');
define('HOST', 'localhost:8889');
define('DB', 'BB_SCO');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dept=$_POST['dept'];

try{
 $connexion  = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8" , LOGIN, PASS);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "COOL";
   


 

}
catch(PDOException $e){
  echo "echec connexion  ".$e->getmessage();

}
if (isset($_POST['valid'])) {
	  $req= $connexion->prepare("INSERT INTO teste(PRENOM,DEPART,NOM) VALUES (:fnom,:fprenom,:fdept)");
   $req -> bindParam(':fnom', $nom);
   $req -> bindParam(':fprenom', $prenom);
   $req -> bindParam(':fdept', $dept);
  
  $req->execute();
	# code...
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form method="POST">
	<input type="text" name="nom" required placeholder="nom">
	<input type="text" name="prenom" required placeholder="prenom">
	<input type="text" name="dept" required placeholder="dept">

	<input type="submit" name="valid" value="valide">
</form>
</body>
</html>