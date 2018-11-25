<?php 
include("connect.php");

if(isset($_GET['id'])){
	
	
	$del="DELETE FROM etudiant WHERE id_etudiant=".$_GET['id'];
	if(mysql_query($del,$connect)){
		header("location:index.php?p=1&m=1");
	}else{
		header("location:index.php?p=1&m=0");
	}
	}
?>