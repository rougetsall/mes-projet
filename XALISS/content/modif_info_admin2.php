<?php
include('connect.php');
$nom = $_POST['nom'] ;
  //prenom:
$prenom = $_POST['prenom'] ;

$idadmin=$_POST["id"];
$login=$_POST['log'];
$passe=$_POST['passe'];
$tel=$_POST['telephone'];
$adresse=$_POST['adresse'];



$sql = "UPDATE administrateur SET nom ='$nom', prenom ='$prenom', login='$login', password='$passe', telephone='$tel', adresse='$adresse' WHERE id_admin = $idadmin ;" ;

		   
$requete = mysql_query($sql, $connect) or die( mysql_error() ) ;
 
 
  if($requete)
  {
	header("Location:index.php?idadmin=".$idadmin."&login=".$login."&password=".$passe);
  }
  else
  {
	header("Location:modif_info_admin.php?idadmin=".$idadmin);
  }
?>
	