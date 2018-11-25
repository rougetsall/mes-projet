<?php
/* connexion et selection de base de donne */
include("connect.php");

/* charger liste deroulante */
$departement="select * from departement";
$result_dept=mysql_query($departement);
$rows_dept=mysql_fetch_array($result_dept);
$nb_dept=mysql_num_rows($result_dept);


if(isset($_POST['envoyer'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$sexe=$_POST['sexe'];
	$dept=$_POST['dept'];
	/* requete sql */
	$sql="INSERT INTO etudiant(nom,prenom,login,sexe,password,dept) 
	VALUES ('$nom','$prenom','$login',$sexe,'$password',$dept)";
	
	/* execution requete */
	
	$result=mysql_query($sql,$connect);
	
	if($result){
		//echo'succes ok';
		header("location:index.php?m=1&p=2");
	}else{
		//echo 'non ok';
		header("location:index.php?m=0&p=2");
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
            <input type="text" name="nom" id="nom" />
          </td>
        </tr>
        
		<tr>
          <th scope="row"><label for='prenom'>Prenom </label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="prenom" id="prenom" />
          </td>
        </tr>
		
		<tr>
          <th scope="row"><label for='Departement'>departement </label></th>
          <td>&nbsp;</td>
          <td>
            <select name="dept" id="dept" >
			<?php if($nb_dept){
				do{
					?>
				<option value='<?php echo $rows_dept["id_dept"]; ?>'>
				<?php echo $rows_dept["nom_dept"]; ?>
				</option>
				<?php 
				}while($rows_dept=mysql_fetch_array($result_dept));
			} ?>
			</select>
          </td>
        </tr>
		nb_dept
		<tr>
          <th scope="row"><label for='login'>Login</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="login" id="login" />
          </td>
        </tr>
		
		<tr>
          <th scope="row"><label for='password'>Mot de passe</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="password" id="password" />
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
          <th scope="row"><input type='submit' name='envoyer' value='Enregistrer'/></th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
</form>

</body>
</html>