<?php 
include("connect.php");

if(isset($_GET['id']) && isset($_GET['etat'])){
	
	if($_GET['etat']){
		$etat=0;
	}else{
		$etat=1;
	}
	$up="UPDATE etudiant SET etat=$etat WHERE id_etudiant=".$_GET['id'];
	if(mysql_query($up,$connect)){
		header("location:index.php?p=1&m=1");
	}else{
		header("location:index.php?p=1&m=0");
	}
	}
?>