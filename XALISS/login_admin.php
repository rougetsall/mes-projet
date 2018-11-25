<?php
   session_start();
   include('content/connect.php');
   if(isset($_POST['envoyer'])){
	   $login=$_POST['login'];
	   $passe=$_POST['passe'];
	   
   $sql="select * from Administrateur Where login='$login' and password='$passe' ";
    
	$result=mysql_query($sql,$connect);
	$nb_result=mysql_num_rows($result);
	if($nb_result){
		$donnee=mysql_fetch_array($result);
		/*creation des variables de session */
			$_SESSION['login']=$donnee['login'];
			$_SESSION['id_admin']=$donnee['id_admin'];
			$_SESSION['nom']=$donnee['nom'];
			$_SESSION['prenom']=$donnee['prenom'];
			$_SESSION['telephone']=$donnee['telephone'];
		/* fin enregistrement */
		
	header("Location:./content/index.php?idadmin=".$donnee['id_admin']."&login=".$donnee['login']."&password=".$donnee['password']);
	}else{
		header("Location:login_admin.php?e=0");
	}
   }
?>


<!doctype html>
<html>
	<head>
		<title>Projet</title>
		<link rel='stylesheet' type="text/css" href='file:///C|/wamp/www/Projet/css/style.css'>
	</head>
<body background="css/voix.jpg">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<img src="content_caisse/IMG_20150415_143748.jpg" width="180" height="185">
<img src="content_caisse/IMG_20150414_184359.jpg" width="175" height="185" align="right">
<form name="frm" action='<?php $_SERVER['PHP_SELF'];?>' method='post'>
  <fieldset >
<legend align="center" ><font color="#00FF33">CONNEXION ADMINISTRATEUR</font> </legend>
 <table width="356" height="133" align="center" bgcolor="#3399FF">
     <tr>
	    <td width="120"><div align="center">Login :</div></td>
		<td width="9">&nbsp;</td>
		<td width="211"><div align="center">
		  <input type="text" name="login" value=''/>
	    </div></td>
	</tr>
	<tr>
	    <td><div align="right">Mot de passe :</div></td>
		<td>&nbsp;</td>
		<td><div align="center">
		  <input type="password" name="passe" value=''/>
	    </div></td>
	</tr>
	<tr>
	    <td height="55"><div align="center">
	      <input type="submit" name="envoyer" value="Connexion">
        </div></td>
		<td>&nbsp;</td>
		<td><div align="center">
		  <input type="reset" name="annuler" value='Annuler'/>
	    </div></td>
	</tr>
</table>
</fieldset>
</form>
</body>