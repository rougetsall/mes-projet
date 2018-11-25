<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
</head>
<body>
	<form method="POST">
			 <input type="text" name="number" required>
			 <input type="submit" name="valide" value="Valide">

			 <?php 
			 
              if (count($_POST["number"]) !=0) {
              	# code...
                  

					 if (is_numeric($_POST["number"]) && strlen($_POST["number"])==4) {
					 	
					 	echo (date("Y")-$_POST["number"]);
					 }
			    }
			?>
	 </form>
</body>
</html>









