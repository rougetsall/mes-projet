<?php
/* connexion et selection de base de donne */
include('connect.php');
$sql="select * from faculte";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$nb=mysql_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>

<body>
<table align='center' width='70%' border='1'>
<tr>
	<th>Identifiant</th><th>Libelle</th>
</tr>
	<?php
	$i=0;
	do{
		if($i%2){
			echo "<tr bgcolor='gray'>";
		}else{
				echo "<tr bgcolor='yellow'>";
		}
	?>
		
			<td><?php echo $rows['id_fac'];?></td>
			<td><?php echo $rows['libelle'];?></td>
		</tr>
	<?php
	$i++;
	}while($rows=mysql_fetch_array($result));
	?>
</table>
</body>
</html>