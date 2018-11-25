<?php
function nombre($date)
{
	
    
	if (is_integer($date)) {
		
		for ($i=0; $i<=$date; $i++) 
		{ 
		 	# code...
		  echo $i."<br>";
	     }
	}
}
 $data=intval($_GET['date']);
nombre($data);




?>