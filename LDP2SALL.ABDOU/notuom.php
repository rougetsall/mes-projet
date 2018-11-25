<?php

	$tab0 = array('Goodbye', 'Dennis');

	$tab1 = array('U', 'DUN', 'GOOFED');

	$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');

	$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');

	$tab4 = array('x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk');
  
  function onlyTheBest($tab)
  {         $mot="";
  	           $nb=0;
  	   /*for ($i=0; $i<sizeof($tab) ; $i++) 
  	    { 
  	        echo $tab[$i]."<br>";
  	          
  		    if (mb_strlen($tab[$i]) > mb_strlen($lon) ) 
  		    {
  			$lon=$tab[$i];
              $nb=mb_strlen($tab[$i]);
  		    }
  		    
  		    
  	    }*/
  	    foreach ($tab as $key => $value) {
  	    	# code...
  	    	
  	    	 if (mb_strlen($value) > mb_strlen($mot) ) 
  		    {
  			$mot=$value;
              
  		    }
  	    }

   		echo $mot;

   	}




   onlyTheBest($tab3);
  
	

?>





<!DOCTYPE html>
<html>
<head>
	<title>rrrr</title>
</head>
<body>
<form action="foo.php" method="post" action="notuom.php">
Name: <input type="text" name="username"><br>
Email: <input type="text" name="email"><br>
<input type="submit" name="submit" value="Submit me!">
</form>



<?php
echo $_POST['username'];
echo $_REQUEST['email'];
?>
</body>
</html>