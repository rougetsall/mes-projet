<?php


include('connect.php');
if(isset($_POST['envoyer'])){
$code=$_POST['code'];/*requete*/
$adress=$_POST['adress'];
$nci=$_POST['nci'];

$sql="select * from transaction Where code_envoi=$code";	

$result=mysql_query($sql,$connect);
	$nb_result=mysql_num_rows($result);
	if($nb_result){
		$rows1=mysql_fetch_array($result);
		$type="RETRAIT";
		$d=date('Y-m-d');
		$code=$rows1['code_envoi'];
		$montant=$rows1['montant'];
		$gain=$rows1['gain'];
		$id_exp=$rows1['id_exp'];
		$id_caissier=$rows1['id_caissier'];
		$question=$rows1['question'];
		$reponse=$rows1['reponse'];
		$id_benef=$rows1['id_benef'];
		
$sql1="INSERT INTO transaction(code_envoi,date,montant,gain,type,id_exp,id_caissier,question,reponse,id_benef) VALUES ('$code','$d','$montant','$gain','$type',$id_exp,$id_caissier,'$question','$reponse',$id_benef)";
$sql4="UPDATE client set num_carte_ident='$nci', adresse='$adress' where id_client=$id_benef";
$result22=mysql_query($sql1,$connect);
$result4=mysql_query($sql4,$connect);
if($result22){echo 'ok';
header("location:retrait2.php");}

}
else {echo'non ok';}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RETRAIT</title>
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

<form  method="post" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>"  class="b">
<fieldset border="1" class="e"  >
<legend><strong><em>FAIRE UN RETRAIT</em></strong></legend>


<table>
   <tr>
    <td height="69"><label for="code"><em><strong>Code d'envoi:</strong></em><b></b></label></td><td> <input type="text" name="code" id="code" value="" size="35" required></td>
  </tr>
   <tr>
    <td height="69"><label for="nci"><em><strong>NCI</strong></em><b></b></label> </td><td><input type="text" name="nci" id="nci" value="" size="35" required></td>
  </tr>
   <tr>
    <td height="69"><label for="adres"><em><strong>ADRESS:</strong></em><b></b></label> <input type="text" name="adress" id="adress" value="" size="35" required></td>
  </tr>
</table>

<table width="820" border="0">
 
  <tr>
    <td height="60" width="20"><b><input type="submit" name="envoyer" value="VALIDE"></b></td>
    <td>&nbsp;</td>
    <td height="60" width="35"><b><input type="reset" name="efface"  value="ANNULER"></b></td>
  </tr>
</table>



</fieldset>


</form>
 </div>
</body>
</html>