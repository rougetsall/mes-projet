<?php
function nombre($date)
{
	$i=0;
    
	if (is_integer($date)) {
		
		while ($i <= $date){
	   		echo $i."<br>";
	     	$i+=1;
	    }
	}
}
 $data=intval($_GET['date']);
nombre($data);




?>