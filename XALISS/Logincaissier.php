<?php
   session_start();
   include('content_caisse/connect.php');
   if(isset($_POST['connexion'])){
	   $login=$_POST['lg'];
	   $passe=$_POST['mp'];
	   
   $sql="select * from caissier Where login='$login' and password='$passe' ";
   
	$result=mysql_query($sql,$connexion);
	$nb_result=mysql_num_rows($result);
	if($nb_result){
		$donnee=mysql_fetch_array($result);
		/*creation des variables de session */
			$_SESSION['login']=$donnee['login'];
			$_SESSION['id_caissier']=$donnee['id_caissier'];
			$_SESSION['nom']=$donnee['nom'];
			$_SESSION['prenom']=$donnee['prenom'];
			$_SESSION['telephone']=$donnee['telephone'];
		/* fin enregistrement */
		
	header("Location:content_caisse/index.php?id=".$donnee['id_caissier']);
	}else{
		header("Location:logincaissier.php?e=0");
	}
   }
?>



<! DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>rouget1</title>
<link rel="stylesheet" type="text/css" href="css/trans.css">

  </head>
  <body>
  <div id="conterner">
  <div id="banniere">
  
</div>
  <div id="contenue">
        <h1 align="center" bgcolor="red" >BIENVENUE XALISS</h1>
        <h1 align="center" bgcolor="red" >     TRANSFERT</h1>
         <div id="logincaissier">
       <form method="post" name="forml"action="<?php $_SERVER['PHP_SELF'] ?>" >
         
               <div><label for="login"><input type="text"  name="login" id="login" class="login" value="" size="35" required placeholder="login"></label>
               </div>


              <div > 
              <label for="password"> <input type="password" class="password" name="password" id="password" value="" size="35" required placeholder="Mot de passe"></label>
             </div>
             <div ><input type="submit" name="envoye" class="envoye" value="envoyer" size="35" >
              </div>
       </form>
        </div>
      </div>

  <div id="sub_footer">
<a href="index.php" align="center"><b><-RETOUR</b></b></a> </div>
 </div>
</body>
</html>