<?php 
include('connect.php');
$id=$_GET['id'];
$sql1="select * From transaction Where id_caissier=".$id;
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
<title>HISTORIQUE</title>
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
<legend><strong><em>HISTORIQUE</em></strong></legend>
<table width="841"  border="0">
<tr bgcolor="red"><th width="188">id</th><th width="89">CODE</th><th width="102">MONTANT</th><th width="51">frait</th><th width="44">type</th><th width="50">gain</th><th width="69">N* EXP<th width="99">N* BENEF</th><th width="71"> DATE</th></tr>

<?php
$i=0;
$d=0;
$som=0;
do{$d++;
$type=$rows1['type'];
$typ="TRANSFERT";

if(strnatcmp($type,$typ)){$ga=(($rows1['gain']*30)/100);}
else{$ga=(($rows1['gain']*15)/100);}
$som+=$ga;
if($i%2){echo"<tr bgcolor='blue'>";}
else{echo"<tr bgcolor='white'>";} 
?>
<td ><?php echo$d;?></td>
<td ><?php echo$rows1['code_envoi'];?></td>
<td ><?php echo$rows1['montant'];?></td>
<td ><?php echo$rows1['gain'];?></td>
<td ><?php echo$rows1['type'];?></td>
<td ><?php echo$ga;?></td>
<td ><?php echo$rows['telephone'];?></td>
<td ><?php echo$rows2['telephone'];?></td>
<td ><?php echo$rows1['date'];?><td width="14" >

</tr>

<?php
$i++;
}while($rows1=mysql_fetch_array($result1));

?>
<tr><td>SOMME DES GAINS: </td><td ><?php echo$som?><td ></tr>
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
header("Location:caisse.php?id=".$id);}
?>
</form>
 </div>
</body>
</html>