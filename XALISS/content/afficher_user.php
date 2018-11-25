<?php
  
  include('connect.php');
  
  $sql="Select * from caissier";
  $result=mysql_query($sql);
  $rows=mysql_fetch_array($result);
  $nb=mysql_num_rows($result);

?>

<!DOCTYPE>
<html>
     <head>
	    <title>Caisssier</title>
	 <head>
<body background="../photo/fond.jpg">
     <h1 align='center'><font color='green'>LISTE DES CAISSIERS</font></h1><br/>
     <table align="center" border="1" width="70%">
      <tr>
      	<th bgcolor="green">Identifiant</th ><th bgcolor="green">NOM</th><th bgcolor="green">PRENOM</th><th bgcolor="green">LOGIN</th>
		<th bgcolor='green'>PASSWORD</th><th bgcolor='green'>TELEPHONE</th></th><th bgcolor='green'>ADRESSE</th>
		<th bgcolor='green'>SUPPRIMER</th><th bgcolor='green'>ETAT</th>
      </tr>
	  <?php
	  $i=0;
      do{
      	
      	if($i%2){
      		echo "<tr bgcolor='white'>";
      	}else{
      		echo "<tr bgcolor='gray'>";
      	}

      ?>
	               <td align='center'><?php echo $rows['id_caissier'];?></td>
             <td align='center'><?php echo $rows['nom'];?></td>
             <td align='center'><?php echo $rows['prenom'];?></td>
			 <td align='center'><?php echo $rows['login'];?></td>
			 <td align='center'><?php echo $rows['password'];?></td>
			 <td align='center'><?php echo $rows['telephone'];?></td>
			 <td align='center'><?php echo $rows['adresse'];?></td>
             
			<td align='center'><?php echo (" <a href=\"supprimer_user.php?id=".$_GET['idadmin']."&idcaissier=".$rows['id_caissier']."\"><img src='../photo/sup.gif' width=20 heigth=20></a>"
			                               );?></td>
			
			<?php 
			 if($rows['etat']==1) {?>
			      <td align='center'><?php echo (" <a href=\"activer_desactiver.php?p=2&id=".$rows['id_caissier']."&etat=".$rows['etat']."\"><img src='../photo/actif.png' width=20 heigth=20></a>"
			                               );?></td>
				  <?php
			 }else{?>
			      <td align='center'><?php echo (" <a href=\"activer_desactiver.php?p=2&id=".$rows['id_caissier']."&etat=".$rows['etat']."\"><img src='../photo/inactif.png' width=20 heigth=20></a>"
				                           );?></td>
				 <?php
			 }?>
			 

          </tr>
      <?php
      $i++;
       }while($rows=mysql_fetch_array($result));
       ?>
	   </table>
</body>	 
</html>