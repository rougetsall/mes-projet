<!DOCTYPE html>
<html>
<head>
	<title>input</title>
</head>
<body>
	<form method="POST">
			 <input type="text" name="text" required placeholder="login">
			 <input type="password" name="pwd" required placeholder="mot de passe">
			  <input type="hidden" name="hid" value="I'm hide forever">
			 <input type="submit" name="valide" value="submit">

	 </form>

	 <?php 
   
             foreach ($_POST as $key => $value) {
              		$long=strlen($value);
              		$mot="";
              		
	              		if ($long > 10) {
	              			
	              		for ($i=0; $i < 7; $i++) { 
	              			
	              			$car=$value[$i];
	              			$mot.=$car;
	              		}
	              		  $mot.="...";
	              		}
	              		else{
	              			$mot= $value;
	              		}
              		echo $key." => " .$mot."<br>";
                }
			    


	    ?>
</body>
</html>