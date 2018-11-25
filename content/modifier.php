<?php
/* connexion et selection de base de donne */
include("connect.php");
if(isset($_POST['envoyer'])){
	$update="UPDATE etudiant SET
			nom = ".$_POST['nom'].",
			prenom=".$_POST['prenom'].",
			login=".$_POST['login'].",
			password =".$_POST['passe']."
			WHERE id_etudiant='.$_POST['id'];
	if(mysql_query($update)){
		header("location:index.php?p=1&m=1");
	}else{
		header("location:index.php?p=1&m=0");
	}
}
if(isset($_GET['id'])){
$info='select * from etudiant where id_etudiant = '.$_GET['id'];
$rows_info=mysql_query($info);
$rows_data=mysql_fetch_assoc($rows_info);
$nb=mysql_num_rows($rows_info);




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
            <input type="text" name="nom" id="nom" value='<?php echo $rows_data['nom'];?>'/>
          </td>
        </tr>
        
		<tr>
          <th scope="row"><label for='prenom'>Prenom </label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="prenom" id="prenom" value='<?php echo $rows_data['prenom'];?>'/>
          </td>
        </tr>
		


		<tr>
          <th scope="row"><label for='login'>Login</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="login" id="login" value='<?php echo $rows_data['login'];?>'/>
          </td>
        </tr>
		
		<tr>
          <th scope="row"><label for='password'>Mot de passe</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="password" id="password" value='<?php echo $rows_data['password'];?>'/>
          </td>
        </tr>
		
		<tr>
          <th scope="row"><label for='sexe'>Sexe</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="radio" name="sexe" id="sexe" value='1' />
			&nbsp;M 
			<input type="radio" name="sexe" id="sexe" value='2'/>F 
          </td>
        </tr>
		
		
		
        <tr>
          <th scope="row"><input type='submit' name='envoyer' value='Modifier'/></th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <input type='hidden' name='id' value='$'/>
</form>

</body>
</html>
<?php } ?>