<?php 

define('LOGIN', 'root');
define('PASS', 'root');
define('HOST', 'localhost:8889');
define('DB', 'BB_SCO');
$nom=$_POST["toto"];
$pnom=$_POST["ptoto"];
$lnom=$_POST["ltoto"];
$pass=$_POST["passwd"];

try{
 $connexion  = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8" , LOGIN, PASS);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "COOL";
   
}
catch(PDOException $e){
  echo "echec connexion  ".$e->getmessage();

}
if (isset($_POST['valide'])) {

	$req=$connexion->prepare("INSERT INTO test(nom,prenom,login,passwd) VALUES(:ftoto,:fptoto,:fltoto,:fpass)");
	$req -> bindParam(':ftoto', $nom);
	$req -> bindParam(':fptoto', $pnom);
	$req -> bindParam(':fltoto', $lnom);
	$req -> bindParam(':fpass', $pass);
	$req->execute();
	# code...
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>toto</title>
	<style type="text/css">
		.fo{
			background-color: blue ;
			width: 250px;
			height: 250px;
			margin: auto;
		}
		.dd{
			width: 200px;
			height: 200px;
			margin-left: 20%px;
			margin: auto;
		}

	</style>
</head>
<body>
	<form method="POST" class="fo" >
		<div id="dd">
			<h2>Inscription</h2>
			<div><input type="text" name="toto" placeholder="nom"></div>
			<div></div>
			<div><input type="text" name="ptoto" placeholder="prenom" ></div>
			<div></div>
			<div><input type="text" name="ltoto" placeholder="login"></div>
			<div><input type="password" name="passwd" placeholder="password"></div>
			<div><input type="submit" name="valide" value="envoyer"></div>
       </div>
	</form>

</body>
</html>