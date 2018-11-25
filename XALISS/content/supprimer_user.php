<?php
  
  include('connect.php');
  $idadmin=$_GET['id'];
  $id_caissier=$_GET['idcaissier'];
  $result=mysql_query($sql);
  $rows=mysql_fetch_array($result);
  $nb=mysql_num_rows($result);
  
  $sql="DELETE FROM caissier Where id_caissier=".$id_caissier;
  
  $result=mysql_query($sql,$connect);
  	if( $result) {
  		 	
	header("Location:index.php?p=2&idadmin=".$id);
		break;
  	}else{
  		
	header("Location:index.php?idadmin=".$id);
		break;
  	}
  


?>
