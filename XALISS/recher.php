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
$sql1="INSERT INTO transaction(code_envoi,date,montant,gain,type,id_exp,id_caissier,question,reponse,id_benef) VALUES ('$code','$d','$montant','$gain','$type',$id_exp,$id,'$question','$reponse',$id_benef)";
$result22=mysql_query($sql1,$connect);
if($result22){echo' ok';
header("location:retrait2.php?");}

}
else {echo'non ok';}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RETRAIT</title>
<link rel="stylesheet" type="text/css" href="pourtransfert.css">
</head>

<body>
 <div id="conterner">
  <div id="banniere">
   <p><img src="tn_rouget.jpg" width="90" height="89"/></p>
</div>
<div id="navigation">
  <table width="879"  border="0">
  <tr><td width="11"><ul>
    <il><td width="94" bgcolor="gray" scope="col"><?php echo ("<a href='transfert.php?id=".$_GET['id']."'>TRANSFERT</a>");?></td>
    <td width="13">&nbsp;</td>
    <il><td width="85" bgcolor="gray" scope="col"><?php echo ("<a href='Retrait.php?id=".$_GET['id']."'>RETRAIT</a>");?></td>
  </il> <td width="1">&nbsp;</td>
   <il> <td width="126" bgcolor="gray" scope="col"><a href="#"><strong><em>
      <strong>RECHERCHR
      UNE TRANSACTION</strong></td>
   </il> <td width="12">&nbsp;</td>
   <il><td width="112" height="72" bgcolor="gray"><a href="#"><strong>HISTORIQUE</strong></a></td>
   </il> <td width="4">&nbsp;</td>
    <il><td width="155"  bgcolor="gray"><a href="#"><em><strong>CALCULE ET AFFICHAGE DES GAINS</strong></em>
      </h2></a></td></il> <td width="12">&nbsp;</td>
    <il><td width="156" bgcolor="red"><a href="Logincaissier.php"><em><strong>DECONNECTION</strong></em></a></td>
  </il> 
  <td width="16"><ul></tr>
</table>
  </div>
  <div id="contenue">
  <h1 align="center" bgcolor="red" >BIENVENUE ROUGET</h1>
  <h1 align="center" bgcolor="red" >     TRANSFERT</h1>
<form  method="post" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>"  class="b">
<fieldset border="1" class="e"  >
<legend><strong><em>FAIRE UN RECHERCHE</em></strong></legend>


<table>
   <tr>
    <td height="69"><label for="code"><em><strong>Donner Le Numero :</strong></em><b></b></label></td><td> <input type="text" name="code" id="code" value="" size="35" required></td>
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

<img src="IMG_20150204_235411.jpg" width="140" height="92"><
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
header("Location:caisse.php?id=".$id);}
?>
</form>
 </div>
</body>
</html>