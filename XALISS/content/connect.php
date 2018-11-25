<?php
	$host='localhost';
	$user='root';
	$pwd='';
	$base='tranfertrouget';
	
	if(! $connect=mysql_connect($host,$user,$pwd)){
			echo"connexion impossible";
			exit;
	}
	if(!$id=mysql_select_db($base,$connect)){
		echo'Selection de la base '.$base.' impossible';
		exit;
	}
?>