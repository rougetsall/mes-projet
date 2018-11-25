<?php 
include('connect.php');

$sql1="select * From transaction Where id_trans=(select MAX(id_trans) From transaction)";
$result1=mysql_query($sql1);
$rows1=mysql_fetch_array($result1);
$nb1=mysql_num_rows($result1);
$sql="select * From client Where id_client =".$rows1['id_exp'];
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$nb=mysql_num_rows($result);
$sql2="select * From client Where id_client =".$rows1['id_benef'];
$result2=mysql_query($sql2);
$rows2=mysql_fetch_array($result2);
$nb=mysql_num_rows($result2);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>recu</title>
</head>

<body>

<form" method="get" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>">

<fieldset border="0" >
<legend align="center"><strong><em>RECU</em></strong></legend>
<h2 align="center" bgcolor="red" >BIENVENUE ROUGET</h2>
  <h2 align="center" bgcolor="red" >     TRANSFERT</h2>
<table width="50%" height="70%">
<fieldset border="0">
<legend align="center"></br><strong><em>information sur l'expediteur</em></strong></legend>
<table width="715" border="0" align="center">
  <tr>
    <td width="155" height="68" scope="col">NOM:</td>
    <td width="247" scope="col"><?php echo$rows['nom'];?></td>
    <td width="70" scope="col">Prenom:</td>
    <td width="215" scope="col"><?php echo$rows['prenom'];?></td>
  </tr>
  <tr>
    <td height="52"><strong><em>Telephone:</em></strong></td>
    <td><?php echo$rows['telephone'];?></td>
    <td><strong><em>NCI:</em></strong></td>
    <td><?php echo$rows['num_carte_ident'];?></td>
  </tr>
  <tr>
    <td height="46"><strong><em>Adresse:</em></strong></td>
    <td><?php echo$rows['adresse'];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</fieldset >

<fieldset border="0">
<legend align="center">information sur le beneficiaire </legend>
<table width="724" border="0" align="center">
  <tr>
    <td width="128" height="40" scope="col"><strong><em>NOM:</em></strong></td>
    <td width="183" scope="col"><?php echo$rows2['nom'];?></td>
    <td width="93" scope="col"><strong><em>prenom:</em></strong>
      </td>
    <td width="292" scope="col"><?php echo$rows2['prenom'];?></td>
  </tr>
  <tr>
    <td height="46" ><strong><em>Telephone:</em></strong></td>
    <td><?php echo$rows2['telephone'];?></td>
    <td ><strong><em> localite:</em></strong></td>
    <td><?php echo$rows2['localite'];?></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</fieldset>


<fieldset border="0">
<legend align="center"><strong><em>information Generale</em></strong></legend>
<table width="725" border="0" align="center">
  <tr>
    <td width="90" height="62" scope="col"><strong><em>montant:</em></strong></td>
    <td width="135" scope="col"><?php echo$rows1['montant'];?></td>
    <td width="91" scope="col"><em><strong>frais:</strong></em></td>
    <td width="381" scope="col"><?php echo$rows1['gain'];?></td>
  </tr>
  <tr>
    <td height="54"><strong><em>Question:</em></strong></td>
    <td><?php echo$rows1['question'];?></td>
    <td><strong><em>Reponse:</em></strong></td>
    <td><?php echo$rows1['reponse'];?></td>
  </tr>
  <tr>
    <td height="42"><strong><em>Code d'envoi: </em></strong></td>
    <td><?php echo$rows1['code_envoi'];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

<p><br/><p>
</table>
</fieldset>
 
 </form>

</body>
</html>