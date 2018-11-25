  <?php


include('connect.php');
if(isset($_POST['envoyer'])){
$id=$_GET['id'];
$nom=$_POST['nom'];/*requete*/
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$numcart=$_POST['numcart'];
$adresse=$_POST['adresse'];
$question=$_POST['question'];
$reponse=$_POST['reponse'];
$localite=$_POST['localite'];
$nomb=$_POST['nomb'];
$prenomb=$_POST['prenomb'];
$telb=$_POST['telb'];
$montant=$_POST['montant'];
$gain=(($montant*7)/100);
$code=00000000;
  for($i=1;$i<=8;$i++)
  {$nb=rand(0,9); $code.=$nb;}
$d=date('Y-m-d');
$type="TRANSFERT";
$sql="INSERT INTO client(nom,prenom,telephone,num_carte_ident,adresse,localite) VALUES ('$nom','$prenom','$tel','$numcart','$adresse','$localite')";
 $sql2="INSERT INTO client(nom,prenom,telephone,localite) VALUES ('$nomb','$prenomb','$telb','$localite')";
 
$sql1="INSERT INTO transaction(code_envoi,date,montant,gain,type,id_exp,id_caissier,question,reponse,id_benef) VALUES ('$code','$d','$montant','$gain','$type',(select id_client from client where telephone like '$tel'),$id,'$question','$reponse',(select id_client from client where telephone like '$telb'))";
$result=mysql_query($sql,$connect);
$result2=mysql_query($sql2,$connect);
$result1=mysql_query($sql1,$connect);
if(($result)&&($result2)){
	header("location:trans2.php?id=".$id);
}else {echo 'non ok'.$id;} 


}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TRANSFERT</title>
<link rel="stylesheet" type="text/css" href="../css/pourtransfert.css">
</head>

<body>


<div id="conterner">
  <div id="banniere"> <p align="rigth"><a href="../logout.php" >DECONNECTION</a></p>
  <marquee><font size="5" >
  <blink><p  >
  <h2 align="center" class="p">BIENVENUE ROUGET</h2><h2 align="center" class="p">  TRANSFERT</h2>
  </p>
  </blink></font></marquee>
</div>
 <div id="navigation" class="centrer">
 <?php include("nav.php");?>

  </div>
  <div id="contenue">
  
<form  method="post" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>">
<fieldset border="1" class="c">
<legend><strong><em>ENVOYER UN TRANSFERT</em></strong></legend>
<h2 align="center"></br><strong><em>information sur l'expediteur</em></strong></h2>
<table  border="0">
  <tr>
    <td width="131" scope="col"><label for="nom"><em><strong> NOM:</strong></em></label></td><td width="216"><input type="text"  name="nom" id="nom" value="" size="35" required></td>
    <td width="96"  scope="col"><label for="prenom"><em><strong>PRENOM: </strong></em><b></b></label> </td><td width="241"><input type="text" name="prenom" id="prenom" value="" size="35" required></td>
  </tr>
  <tr>
    <td height="33" ><label for="tel"><em><strong>TELEPHONE: </strong></em><b></b></label> </td><td><input type="text" name="tel" id="tel" value="" size="35" required></td>
    <td><label for="numcarte"><em><strong>NCI :  </strong></em><b></b></label> </td><td><input type="text" name="numcart" id="numcarte" value="" size="35" required></td>
  </tr>
  <tr>
  <td height="39" ><label for="adr"><em><strong> ADRESS: </strong></em><b></b></label> </td><td><input type="text" name="adresse" id="tel" value="" size="35" required></td>
    </tr>
</table>
<hr/>

<h2 align="center"><strong><em>information Générale</em></strong></h2>
<table  border="0">
  <tr>
    <td height="52" scope="col"><label for="montant"><em><strong>montant:</strong></em></label></td><td><input type="text" name="montant" id="montant" value="" size="35" required></td>
   </tr>
   <tr>
    <td height="44" scope="col"><label for="question"><em><strong>QUESTION </strong></em></label></td><td><input type="text" name="question" id="question" value="" size="35" required></td>
  <td height="44"><label for="reponse"><em><strong>REPONSE </strong></em><b></b></label></td><td> <input type="text" name="reponse" id="reponse" value="" size="35" required></td>
  </tr>
</table>
<hr/>
<h2 align="center">information sur le bénéficiaire </h2>
<table border="0">
  <tr>
    <td scope="col"><label for="nomb"><em><strong>NOM:</strong></em></label></td><td><input type="text" name="nomb" id="nom" value="" size="35" required></td>
    <td scope="col"><label for="prenomb"><em><strong>PRENOM:  </strong></em><b></b></label>
      </td><td><input type="text" name="prenomb" id="prenomb" value="" size="35" required></td>
  </tr>
  <tr>
    <td ><label for="telb"><em><strong>TELEPHONE: </strong></em><b></b></label> </td><td><input type="text" name="telb" id="telb" value="" size="35" required></td>
    <td><label for="loc"><em><strong>localite: </strong></em><b></b><select name="localite">
<option value="">localite</option>
	<option value="national">national</option>
<option value="international">international</option>
</select></td>
    
  </tr>
</table>
<hr/>
<table border="0">
 
  <tr>
    <td height="60" width="20"><b><input type="submit" name="envoyer" value="ENVOYER"></b></td>
   
    <td height="60" width="35"><b><input type="reset" name="efface"  value="ANNULER"></b></td>
  </tr>
</table>
</fieldset>
 </form>
  </div>
  
  <div id="sub_footer">
  <form  method="post" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>"  >
  <table>
 
  <tr>
    <td height="60" width="20"><b><input type="submit" name="retour" value="<==RETOUR"></b></td>
</table>
<?php
if(isset($_POST['retour'])){ 
$id=$_GET['id'];
header("Location:index.php?id=".$id);}
?>
</form>
 </div>
</body>
</html>