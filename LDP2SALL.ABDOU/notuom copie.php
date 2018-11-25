<?php
session_start();

echo $_SESSION['nom'];
	$tab0 = array('Goodbye', 'Dennis');

	$tab1 = array('U', 'DUN', 'GOOFED');

	$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');

	$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');

	$tab4 = array('x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk');
  
  function onlyTheBest($tab)
  {         $lon="";
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
  	    	
  	    	 if (mb_strlen($value) > mb_strlen($lon) ) 
  		    {
  			$lon=$value;
              $nb=mb_strlen($value);
  		    }
  	    }

   		echo $lon;
   	}


   onlyTheBest($tab4);
  
	

?>