<?php
include('connect.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dep=$_POST['dept'];
$login=$_POST["login"]; 
$password=$_POST["password"];
$sexe=$_POST["sexe"]; 

if ( $nom !=NULL && $prenom != NULL && $dep != NULL && $login !=NULL && $password !=NULL) {
  # code...

 $req= "INSERT INTO ETUDIANT(`NOM`, `PRENOM`, `DEPART` , `LOGIN`, `PASSWD`, `SEXE`) VALUES ('$nom','$prenom','$dep','$login',$password','$sexe')";

   $connexion->exec($req);
   echo "merci";}
?>



<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ajoutEtudiant.php">
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
             <input type="text" name="dept"  />
          </td>
        </tr>
	
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
            <input type="radio" name="sexe" id="sexe" value='M' />
			&nbsp;M 
			<input type="radio" name="sexe" id="sexe" value='F'/>F 
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