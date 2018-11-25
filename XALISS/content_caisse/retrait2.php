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
<title>RETRAIT</title>
<link rel="stylesheet" type="text/css" href="../css/pourtransfert.css">
</head>

<body>
 <div id="conterner">
  <div id="banniere"><marquee><font size="5" >
  <blink><p  >
  <h2 align="center" class="p">BIENVENUE ROUGET</h2><h2 align="center" class="p">  TRANSFERT</h2>
  </p>
  </blink></font></marquee>

</div>

  <div id="contenue">
  
<form  method="get" name="forml" action="<?php $_SERVER['PHP_SELF'] ?>"  class="b">
<fieldset border="1"  class="c">
<legend><strong><em>RETRAIT</em></strong></legend>

<fieldset class="c" >
<legend align="center"></br><strong><em>information sur l'expediteur</em></strong></legend>
<table width="681" border="0">
  <tr>
    <td width="99" height="68" scope="col">NOM:</td>
    <td width="191" scope="col"><?php echo$rows['nom'];?></td>
    <td width="66" scope="col">Prenom:</td>
    <td width="297" scope="col"><?php echo$rows['prenom'];?></td>
  </tr>
  <tr>
    <td height="52"><strong><em>Telephone:</em></strong></td>
    <td><?php echo$rows['telephone'];?></td>
    <td><strong><em>NCI:</em></strong></td>
    <td><?php echo$rows['num_carte_ident'];?></td>
  </tr>
  <tr>
    <td height="71"><strong><em>Adresse:</em></strong></td>
    <td><?php echo$rows['adresse'];?></td>
    
  </tr>
</table>

</fieldset >

<fieldset class="a">
<legend align="center">information sur le bénéficiaire </legend>
<table width="773" border="0">
  <tr>
    <td width="100" height="40" scope="col"><strong><em>NOM:</em></strong></td>
    <td width="276" scope="col"><?php echo$rows2['nom'];?></td>
    <td width="79" scope="col"><strong><em>prenom:</em></strong>
      </td>
    <td width="290" scope="col"><?php echo$rows2['prenom'];?></td>
  </tr>
  <tr>
    <td height="46" ><strong><em>Telephone:</em></strong></td>
    <td><?php echo$rows2['telephone'];?></td>
    <td ><strong><em> localite:</em></strong></td>
    <td><?php echo$rows2['localite'];?></td>
  </tr>
  <tr>
    <td height="46" ><strong><em>NCI</em></strong></td>
    <td><?php echo$rows2['num_carte_ident'];?></td>
    <td ><strong><em> Adresse :</em></strong></td>
    <td><?php echo$rows2['adresse'];?></td>
  </tr>
  
</table>

</fieldset>


<fieldset class="a">
<legend align="center"><strong><em>information Générale</em></strong></legend>
<table width="751" border="0">
  <tr>
    <td width="110" height="62" scope="col"><strong><em>montant:</em></strong></td>
    <td width="216" scope="col"><?php echo$rows1['montant'];?></td>
    <td width="77" scope="col"><em><strong>frais:</strong></em></td>
    <td width="320" scope="col"><?php echo$rows1['gain'];?></td>
  </tr>
  <tr>
    <td height="54"><strong><em>Question:</em></strong></td>
    <td><?php echo$rows1['question'];?></td>
    <td><strong><em>Reponse:</em></strong></td>
    <td><?php echo$rows1['reponse'];?></td>
  </tr>
  <tr>
    <td height="67"><strong><em>Code d'envoi: </em></strong></td>
    <td><?php echo$rows1['code_envoi'];?></td>
  
  </tr>
</table>
</fieldset>
<a href="recu.php" target="_blank">REcu</a>
</fieldset>
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
  <div id="sub_footer">
 
 </div>
</body>
</html>