<!DOCTYPE html>
<html>
<head>
  <title>saisie</title>
  <meta charset="utf-8">
</head>
<body>


<?php 

if (isset($_POST["nom"])) {

if (strlen($_POST["nom"]) > 50) {

 echo "incorrecte ";

}
else {
  echo $_POST["nom"];
echo $_POST["sexe"];
echo $_REQUEST['nom'];

}
}

  ?>


<a href="test.php">test</a>


<form id="form1" name="form1" method="post" action="index.php" enctype="multipart/form-data">
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
            <input type="text" name="nom" id="nom"  required />
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
          <th scope="row"><label for='email'>Email</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="text" name="email" id="email" required />
          </td>
        </tr>
    
    <tr>
          <th scope="row"><label for='photo'>Photo</label></th>
          <td>&nbsp;</td>
          <td>
            <input type="file" name="photo" id="photo" />
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
          <td>
              <select multiple name="vin[]">
            <option value="bordeaux">bordeaux</option>
            <option value="beaujolais">beaujolais</option>
            <option value="loire">loire</option>
            </select><br>
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