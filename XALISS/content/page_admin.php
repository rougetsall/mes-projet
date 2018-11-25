<?php

$idadmin=$_GET['idadmin'];
$log=$_GET['login'];
$passe=$_GET['password'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACCUEIL</title>
<link rel='stylesheet' type='text/css' href='style.css'/>
</head>

<body background="../photo/fond.jpg">
<center>
<table width='900' border="0" align='center'>
<td align='center'>&nbsp;</td>
<td height="207" align='center'>&nbsp;</td></tr>
<tr>
  <td align="center">&nbsp;</td>
  <td align="center">
<table width="869" border="1" cellspacing="2" cellpadding="2" >
  <caption>PAGE D'ADMINISTRATION;
  </caption><br/>
  <tr>
    <td width="169" height="39" bgcolor="#00CCFF"><div align="center"><a href="page_admin.php"><strong><font color="#FF9933">ACCUEIL</font></strong></a></div></td>
    <td width="178" bgcolor="#00FF33"><div align="center"><?php echo ("<a href=\"ajout_user.php?idadmin=".$idadmin."\"><font color='#00CCFF'><strong>AJOUT CAISSERS</strong></font>
	                                                          </a>");?></div></td>  
    <td width="178" bgcolor="#00FF33"><div align="center"><?php echo ("<a href=\"modif_info_admin.php?idadmin=".$idadmin."\"><font color='#FFFF00'><strong>MODIFIER INFO PERSO</strong></font>
	                                                           </a>");?></div></td>
    <td width="254" bgcolor='#FFCC00'><div align="center"><a href="calcul_gain_afficher.php"><font color="#FF0000"><strong>CALCUL ET AFFICHAGE GAINS</strong></font></a></div></td>
  </tr>
  <tr>
    <td height="73" bgcolor='#FFCC00'><div align="center"><a href="../logout.php">Deconnexion</a></div></td>
    <td bgcolor='#00CCFF'><div align="center"><a href="afficher_user.php"><font color="#FF9933"><strong>AFFICHAGE CAISSIERS</strong></font></a></div></td>
    <td bgcolor='#FF9933'><div align="center"><a href="best_caissiers.php"><font color="#00CCFF"><strong>MEILLEURS CAISSERS</strong></font></a></div></td>
    <td bgcolor='#00FF33'><div align="center"><a href="localite_rentable.php"><font color="#66FFFF"><strong>CALCUL ET AFFICHAGE LOCALITE PLUS RENTABLES</strong></font></a></div></td>

  </tr>
</table></td></tr>
</center>


</body>
</html>