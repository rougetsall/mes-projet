<! DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>rouget1</title>
<link rel="stylesheet" type="text/css" href="../css/trans.css">

  </head>
  <body>
  <div id="conterner">
  <div id="banniere">
   
</div>
  <div id="contenue">
  <marquee><font size="5" >
  <blink><p  >
  <h2 align="center" class="p">BIENVENUE hada je taime</h2><h2 align="center" class="p">  TRANSFERT</h2>
  </p>
  </blink></font></marquee>
 <form method="get" bgcolor="red" name="forml"action="<?php $_SERVER['PHP_SELF'] ?>" >
 <table width="990" height="200" border="0" align="center"  >
  <tr>
    <th width="287" height="72" scope="col" bgcolor="gray"><?php echo ("<a href='transfert.php?id=".$_GET['id']."'><h1><strong><em>TRANSFERT</em></strong></h1></a>");?></th>
    <th width="20" scope="col">&nbsp;</th>
    <th width="301" scope="col" bgcolor="gray"><?php echo ("<a href='Retrait.php?id=".$_GET['id']."'><h1><strong><em>RETRAIT</em></strong></h1></a>");?></th>
    <th width="42" scope="col">&nbsp;</th>
    <th width="306" scope="col"bgcolor="gray"><a href="#"><strong><em>
      <h1>RECHERCHR</h1>
      <h1>UNE TRANSACTION</h1>
    </em></strong></a></th>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="72" bgcolor="gray"><a href="#"><em><strong><h1>MODIFIER</h1></strong></em></a></td>
    <td>&nbsp;</td>
    <td  bgcolor="gray"><?php echo ("<a href='historique.php?id=".$_GET['id']."'><h2><em>CALCULE ET AFFICHAGE</em></h2>
      <h2><em>DES GAINS</em></h2></a>");?></td>
    <td>&nbsp;</td>
    <td bgcolor="red"><a href="../logout.php"><h1><em><strong>DECONNECTION</strong></em></h1></a></td>
  </tr>
</table>

 </form>
  </div>
  <div id="sub_footer">

 </div>
</body>
</html>