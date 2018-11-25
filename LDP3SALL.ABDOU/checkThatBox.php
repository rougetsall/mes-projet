
<!DOCTYPE html>
<html>
<head>
	<title>exo4</title>
</head>
<body>
	<form method="POST">
		<div><input type="checkbox" name="poney[]" value="Pinkie Pie">Pinkie Pie</div>
		<div><input type="checkbox" name="poney[]" value="Rarity">Rarity</div>
		<div><input type="checkbox" name="poney[]" value="Rainbow Dash">Rainbow Dash</div>
		<div><input type="checkbox" name="poney[]" value="Applejack">Applejack</div>
		<div><input type="checkbox" name="poney[]" value="Princesse Celestia">Princesse Celestia</div>
		<div><input type="submit" name="valide" value="submit"></div>
	</form>
				   <?php 
				   if (isset($_POST["valide"])) {
				   	 if (isset($_POST["poney"])) {
				   	 	# code...
				   	 
				   	foreach ($_POST["poney"] as $key => $value) {
				   		echo $value." , ";
				   		
				   	}
				    }
				    else {
				    	echo "Vous n'avez séléctionné aucune poney.";
				    }
                  }
				   ?>
</body>
</html>