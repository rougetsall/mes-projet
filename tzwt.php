<?php 
 $reverse=[];
	          for ($i=A; $i<Z ; $i++) { 
	          	  $reverse[$i]=$i++;
	          }
	          foreach ($reverse as $key => $value) {
	          	echo $key."=>".$value;
	          }
	          ?>