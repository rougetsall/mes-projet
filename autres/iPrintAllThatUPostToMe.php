<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
			 <input type="text" name="text" required>
			 <input type="password" name="pwd" >
			  <input type="hidden" name="hid" value="I'm hide forever">
			 <input type="submit" name="valide" value="submit">

	 </form>

	 <?php 
   
              	foreach ($_POST as $key => $value) {
              		if (strlen($value)>10) {
              			# code...
              		}
              		echo $key."=>" .$value."<br>";
              	}
			    


	    ?>
</body>
</html>