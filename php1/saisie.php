<?php 
define('LOGIN', 'root');
define('PASS', 'root');
define('HOST', 'localhost:8889');
define('DB', 'BB_SCO');
try{
 $connexion  = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8" , LOGIN, PASS);

    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "COOL";
   


 

}
catch(PDOException $e){
  echo "echec connexion  ".$e->getmessage();

}

  
  

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$dep=$_POST["dept"];
$login=$_POST["login"]; 
$password=$_POST["password"];
$sexe=$_POST["sexe"]; 

//$insertcat = $db->prepare('INSERT INTO categories(categorie) VALUES(?)');
//$insertcat->execute([$cat]);

  # code...
if (isset($_POST["envoyer"])) {

  $req= $connexion->prepare("INSERT INTO ETUDIANT(NOM,PRENOM,DEPART,LOGIN,PASSWD,SEXE) VALUES (:fnom,:fprenom,:fdepart,:flogin,:fpasswd,:fsexe)");
//$req= "INSERT INTO ETUDIANT (NOM,EMAIL,PHOTO) VALUES ('$nom','$email','$photo')"; 
//$result=mysql_query($req,$connexion);
$req -> bindParam(':fname', $nom);
$req -> bindParam(':fprenom', $prenom);
$req -> bindParam(':fdepart', $dep);
$req -> bindParam(':flogin', $login);
$req -> bindParam(':fpasswd', $password);
$req -> bindParam(':fsexe', $sexe);
  $req->execute();
  # code...
}

 

?>

<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>

<body>
<form  method="post">
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
            <input type="text" name="nom" id="nom" required/>
          </td>
        </tr>
        
    <tr>
          <th scope="row"><label for='prenom'>Prenom </label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="prenom" id="prenom" required />
          </td>
        </tr>
    
    <tr>
          <th scope="row"><label for='Departement'>departement </label></th>
          <td>&nbsp;</td>
          <td>
             <input type="text" name="dept"  required />
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
            <input type="text" name="password" id="password" required />
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