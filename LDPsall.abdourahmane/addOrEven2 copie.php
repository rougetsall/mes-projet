<?php 
function addOrEven($date){
	if ($date % 2 == 0) {
		echo "odd";
		# code...
	}
	else if($date % 2 != 0){
		echo "even";
	}
  else{
  	echo "nombre inconnue";
  }
}
addOrEven($_GET['date']); ?>