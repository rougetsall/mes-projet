<?php


include('connect.php');
if(isset($_GET['envoyer'])){
$nom=$_GET['nom'];/*requete*/
$prenom=$_GET['prenom'];
$tel=$_GET['tel'];
$login=$_GET['lg'];
/*echo $nom.'<br />';
echo $prenom.'<br />';
echo $tel.'<br />';
/* show databases; pour voir tt ls base ..... show table pr ls tables....select* from nom table....
decs nom table afficher le table...


$bdd=new PDO('mysql:host=localhost;dbname=tranfertrouget','root','');

$query = $bdd->prepare('INSERT INTO caissier(nom,prenom,telephone,login) values (:nom,:prenom,:tel,:login);');
$query->execute(array('nom'=>$nom,'prenom'=>$prenom,'tel'=>$tel));*/




$sql="INSERT INTO caissier(nom,prenom,telephone,login) VALUES ('$nom','$prenom','$tel','$login')";
$result=mysql_query($sql,$connect);
if($result){echo 'succes ok';
}else {echo 'non ok';} 


}else
{
?>

<! DOCTYPE html>
<html>
	<head>
		<title>FORMULAIRE</title>
<body>
<h1 align="center"><big>Formulaire Inscription</dig></h1>
<h2 align="center" color="red"><big>ROUGET</dig></h2>
<form method="get" name="forml"action="	">
<table bgcolor="red" align="center" width="50%" height="70%">
<tr> <td ><label for="nom"><b>Nom:</b></label></td><td><input type="text" name="nom" id="nom" value="" size="35"></td></tr>
<tr><td><label for="prenom"><b>Prenom:</b></label></td><td><input type="text" name="prenom" id="prenom" value="" size="35"></td></tr>
<tr><td><label for="tel"><b>tel:</b></label></td><td><input type="text" name="tel" id="age" value="" size="35"></td></tr>
<tr> <td><b>Sexe</b></td><td><input type="radio" name="sexe" value="M">M<input type="radio" name="sexe" value="F">F</td>
<tr><td><label for="login"><b>login</b></label></td><td><input type="text" name="lg" id="login" value="" size="35"></td></tr>

<tr><td><label for="classe"><b>Classe</b></label></td><td><select name="classe">
<option value="">choisir Classe</option>
<option value="l1">L1</option>
<option value="l2">L2</option>
<option value="l3">L3</option>
<option value="m1">M1</option>
</select>
<tr><td><input type="reset" name="efface"  value="Annuler"></td><td><input type="submit" name="envoyer" value="enregistre">
</tr>
</table>
</form>
</body>
</html>

<?php 
}
?>