<html>
  <head>
    <title>modification de données en PHP</title>
  </head>
<body  background="../photo/fond.jpg">
  <div align="center">
    <?php
  include('connect.php');
   $idadmin=$_GET['idadmin'];
   $sql="Select * from administrateur Where id_admin = ".$idadmin;
   
   $result=mysql_query($sql);
   
   $rows=mysql_fetch_array($result);
  ?>
  </div>
  <div align="center">
    <h1><font color="#00CCCC">MODIFICATION INFORMATIONS</font></h1>
  </div>
  <form name="insertion" action="modif_info_admin2.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($idadmin) ;?>">
<table width="400" height="400" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr align="center">
      <td bgcolor="#99FF33"><font color="white">Nom :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="nom" value="<?php echo $rows['nom'] ;?>"></td>
    </tr>
    <tr align="center">
      <td bgcolor="#99FF33"><font color="white">Prenom :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="prenom" value="<?php echo $rows['prenom'] ;?>"></td>
    </tr>
	<tr align="center">
      <td bgcolor="#99FF33"><font color="white">Login :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="log" value="<?php echo $rows['login'] ;?>"></td>
    </tr>
	<tr align="center">
      <td bgcolor="#99FF33"><font color="white">Mot de passe :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="passe" value="<?php echo $rows['password'] ;?>"></td>
    </tr>
	<tr align="center">
      <td bgcolor="#99FF33"><font color="white">Telephone :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="telephone" value="<?php echo $rows['telephone'] ;?>"></td>
    </tr>
	<tr align="center">
      <td bgcolor="#99FF33"><font color="white">Adresse :</font></td>
      <td bgcolor="#FF9933"><input type="text" name="adresse" value="<?php echo $rows['adresse'] ;?>"></td>
    </tr>
	
   
    <tr align="center">
      <td colspan="2" bgcolor="#99FF33"><input type="submit" value="Modifier"></td>
    </tr>
</table>
</form>
</body>
</html>