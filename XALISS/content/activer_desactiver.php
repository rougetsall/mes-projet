<?php

include('connect.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$etat=$_GET['etat'];
	
	echo $id;
	echo $etat;
	if($etat==1){
		$sql="update caissier set etat=0 where id_caissier=$id ;";
	}else{
		$sql="update caissier set etat=1 where id_caissier=$id ;";

	}
	
	
	
	$result=mysql_query($sql,$connect);
  	if( $result) {
  		echo 'success ok';  	
	header("Location:index.php?p=2&idadmin=".$id);
		break;
  	}else{
  		//echo 'non ok';
	header("Location:index.php?idadmin=".$id);
		break;
  	}
}

 
?>