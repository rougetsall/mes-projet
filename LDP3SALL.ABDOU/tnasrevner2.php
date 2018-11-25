<?php

	$tab0 = array('Goodbye', 'Dennis');

	$tab1 = array('U', 'DUN', 'GOOFED');

	$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');

	$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');

	$tab4 = array('x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk');
function pilf($tab){
	$tabe[]="";
	$tabs[]="";
	$i=0;
	foreach ($tab as $key => $value) {
		 
		      $tabe[$i]=$value; 
		 	# code...
		 
		 $i++;
	}
	   
	       $j=sizeof($tabe)-1;
	 
		      for ($k=0; $k <sizeof($tabe) ; $k++) { 
			
		       $tabs[$j]=$tabe[$k]; 
				$j--;
				 }
		
		for ($j=0; $j < sizeof($tabs); $j++) { 
			echo $tabs[$j]."<br>";
		}
}
    pilf($tab1);
?>