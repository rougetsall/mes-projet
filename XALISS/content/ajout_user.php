<?php
include('connect.php');

if(isset($_POST['envoyer'])){
  $idadmin=$_GET['idadmin'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $etat=$_POST['etat'];
  $password=$_POST['password'];
  $login=$_POST['login'];
  $tel=$_POST['tel'];
  $adresse=$_POST['adresse'];

  
  $sql="INSERT INTO caissier(login, password,nom,prenom,telephone,adresse,etat)
          VALUES('$login','$password','$nom','$prenom','$tel','$adresse',$etat)";
  $result=mysql_query($sql,$connect);
    if( $result) {
        
	header("Location:index.php?p=2&idadmin=".$idadmin);
    break;
    }else{
      
	header("Location:index.php?ù=0&idadmin=".$id);
    break;
    }
  }


?>

<!DOCTYPE html>
<html>
      <meta charset="utf-8">
      <head>
	        <title>Inscription des caissiers</title>
	  </head>
<body background="../photo/fond.jpg">
      <center><font color='gray'><h2>INSCRIRE UN NOUVEAU CAISSIER</h2></font></center>
 
 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" title="Departements" bgcolor='gray' >
 
 <div align="center">
   
 </div>
 <center>
 <table width="800" align="center" bgcolor="#0099CC">
 <tr>
 <td align="center"><table width='400' cellspacing="2" bgcolor="#33CCCC" order="0" >
 <tr>
   <td width="165" height="42" align='center'><label for="nom"><font color="white">Nom : </font></label></td>
   <td width="342" align='center'><input type="text" name="nom" id="nom"></td>
 </tr>
 <tr>
   <td width="165" height="42" align='center'><label for="prenom"><font color="white">Prenom : </font></label></td>
   <td width="342" align='center'><input type="text" name="prenom" id="prenom"></td>
 </tr>
<tr>
   <td width="165" height="42" align='center'><label for="tel"><font color="white">Telephone : </font></label></td>
   <td width="342" align='center'><input type="tel" name="tel" id="tel"></td>
 </tr>
 <tr>
   <td width="165" height="42" align='center'><label for="adresse"><font color="white">Adresse : </font></label></td>
   <td width="342" align='center'><input type="text" name="adresse" id="adresse"></td>
 </tr>
 
 <tr>
   <td width="165" height="42" align='center'><label for="etat"><font color="white">Etat : </font></label></td>
   <td width="342" align='center'><input type="radio" name='etat' value="1" id='etat'>Active
                                   <input type="radio" name='etat' value="0" id='etat' checked="checked">Desactive</td>
 </tr>
 <tr>
   <td width="165" height="42" align='center'><label for="log"><font color="white">Login : </font></label></td>
   <td width="342" align='center'><input type="text" name='login' id='log'></td>
 </tr>
 <tr>
   <td width="165" height="42" align='center'><label for="pwd"><font color="white">Mot de passe : </font></label></td>
   <td width="342" align='center'><input type="password" name="password" id='pwd' /></td>
 </tr>
 <tr>
 <td align='center' colspan="2"><input type="submit" name="envoyer" value='Enregistrer'></td>
 </tr>
 </table></td></tr></table>
 </center>
</form>  
</body>

</html>