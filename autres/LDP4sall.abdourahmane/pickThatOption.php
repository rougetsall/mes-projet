<!DOCTYPE html>
<html>
<head>
	<title>select</title>
</head>
<body>
		<form method="post">
				<select name="youtubeur">
					<option ></option>
						<option value="Norman">Norman</option>
					<option value="jojo bernard">jojo bernard</option>
						<option value="Cyprien">Cyprien</option>
					<option value="Mister V">Mister V</option>
					<option value="Hugo Tout Seul">Hugo Tout Seul</option>
				</select>
				<input type="submit" name="valide">
		</form>
 <?php 
				   if (isset($_POST['valide'])) {
				   	# code...
				  
				   if (isset($_POST['youtubeur']) && $_POST['youtubeur'] != NULL) {
				   	echo $_POST['youtubeur'];
				   }
				    else {
				    	echo "Vous n'avez séléctionné aucun youtubeur.";
				    }
				     }
				   ?>
</body>
</html>