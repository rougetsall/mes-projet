<!DOCTYPE html>
<html>
<head>
	<title>exo4</title>
</head>
<body>
	<form method="POST">
		<div><input type="radio" name="tortue" value="Leonardo">Leonardo</div>
		<div><input type="radio" name="tortue" value="Donatelle">Donatelle</div>
		<div><input type="radio" name="tortue" value="Michelangelo">Michelangelo</div>
		<div><input type="radio" name="tortue" value="Raphael">Raphael</div>
		<div><input type="radio" name="tortue" value="Hamato">Hamato</div>
		<div><input type="submit" name="valide" value="submit"></div>
	</form>
				   <?php 
				   if (isset($_POST['valide'])) {
				   	# code...
				  
				   if (isset($_POST['tortue'])) {
				   	echo $_POST['tortue'];
				   }
				    else {
				    	echo "Vous n'avez séléctionné aucune tortue.";
				    }
				     }
				   ?>
</body>
</html>