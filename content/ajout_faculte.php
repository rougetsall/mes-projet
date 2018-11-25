<?php
/* connexion et selection de base de donne */
include('connect.php');
if(isset($_POST['envoyer'])){
	$lib=$_POST['lib'];
	/* requete sql */
	$sql="INSERT INTO faculte(libelle) VALUES ('$lib')";
	
	/* execution requete */
	
	$result=mysql_query($sql,$connect);
	
	if($result){
		//echo'succes ok';
		header("location:ajout_faculte.php?m=1");
	}else{
		//echo 'non ok';
		header("location:ajout_faculte.php?m=0");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table width="500" border="0" align="center" cellpadding="5" bgcolor="#0066FF">
    <tr>
      <td>&nbsp;</td>
      <td><table width="400" border="0" align="center" bgcolor="#CCCCCC">
        <tr>
          <th colspan="3" scope="row">Formulaire ajout faculte</th>
          </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><label for='lib'>Nom</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="lib" id="lib" />
          </td>
        </tr>
        
        <tr>
          <th scope="row"><input type='submit' name='envoyer' value='Enregistrer'/></th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
</form>
<p>
<?php
include("afficher_faculte.php");
?>
</p>
</body>
</html>