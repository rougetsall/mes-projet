<?php 


if (isset($_POST["submit"])) {
			# code...
	if (isset($_POST["deco"])){

		   if (strlen($_POST["message"])>0) {
		   	# code...
		  
				$morse=$_POST["deco"];
				$mot=$_POST["message"];
				
						
				
				
				$txt=array(".-"=>"a",
					       "-..."=>"b",   
					       "-.-."=>"c", 
					       "-.."=>"d", 
					       "."=>"e",
					       "..-."=>"f",
					       "--."=>"g", 
					       "...."=>"h",
					       ".."=>"i", 
					       ".---"=>"j",
					       "-.-"=>"k", 
					       ".-.."=>"l",
					       "--"=>"m",
					       "-."=>"n",
					       "---"=>"o", 
					       ".--."=>"p", 
					       "--.-"=>"q", 
					       ".-."=>"r",
					       "..."=>"s", 
					       "-"=>"t", 
					        "..-"=>"u",



					         "...-"=>"v",
					         ".--"=>"w",
					         "-..-"=>"w",
					         "-.--"=>"y",
					         "--.."=>"z",
					          " "=>" " );
				    
				     $reverse=[     "A"=>"B",
				                    "B"=>"C",
				                    "C"=>"D",
				                     "D"=>"E",
				                     "E"=>"F",
				                     "F"=>"G",
				                     "G"=>"H",
				                     "H"=>"I",
				                     "I"=>"J",
				                     "J"=>"K",
				                     "K"=>"L",
				                     "L"=>"M",
				                     "M"=>"N",
				                     "N"=>"O",
				                     "O"=>"P",
				                     "P"=>"Q",
				                     "Q"=>"R",
				                     "R"=>"S",
				                     "S"=>"T",
				                     "T"=>"U",
				                     "U"=>"V", 
				                     "V"=>"W",
				                     "W"=>"X",
				                     "X"=>"Y",
				                     "Y"=>"Z",
				                     "Z"=>"A",
				                     " "=>" "
				                     ];
				
			          

			          $nomber=[     "2"=>"B",
				                    "3"=>"C",
				                    "4"=>"D",
				                     "5"=>"E",
				                     "6"=>"F",
				                     "7"=>"G",
				                     "8"=>"H",
				                     "9"=>"I",
				                     "10"=>"J",
				                     "11"=>"K",
				                     "12"=>"L",
				                     "13"=>"M",
				                     "14"=>"N",
				                     "15"=>"O",
				                     "16"=>"P",
				                     "17"=>"Q",
				                     "18"=>"R",
				                     "19"=>"S",
				                     "20"=>"T",
				                     "21"=>"U",
				                     "22"=>"V", 
				                     "23"=>"W",
				                     "24"=>"X",
				                     "25"=>"Y",
				                     "26"=>"Z",
				                     "1"=>"A",
				                     "0"=>" ",
				                     "-2"=>"b",
				                    "-3"=>"c",
				                    "-4"=>"d",
				                     "-5"=>"e",
				                     "-6"=>"f",
				                     "-7"=>"g",
				                     "-8"=>"h",
				                     "-9"=>"i",
				                     "-10"=>"j",
				                     "-11"=>"k",
				                     "-12"=>"l",
				                     "-13"=>"m",
				                     "-14"=>"n",
				                     "-15"=>"o",
				                     "-16"=>"p",
				                     "-17"=>"q",
				                     "-18"=>"r",
				                     "-19"=>"s",
				                     "-20"=>"t",
				                     "-21"=>"u",
				                     "-22"=>"v", 
				                     "-23"=>"w",
				                     "-24"=>"x",
				                     "-25"=>"y",
				                     "-26"=>"z",
				                     "-1"=>"a"
				                     
				                            ];

					if($morse=="morse"){
				        
						   $tabmorse=explode("," , $mot);
				     
						       foreach ($tabmorse as $key => $value) {
						       	echo $txt[$value];
						       }
						     
									# code...
					}
						elseif ($morse=="esrom") {
							# code...
							$tabmorse=explode(",",$mot);
							 foreach ($tabmorse as $key => $value) {
							 	# code...
                                  echo $nomber[$value];
							 }
								
						}
						
						elseif($morse=="reverse") {
							
								$tabmorse=str_split($mot);


								foreach ($tabmorse as $key => $value) {
									
									echo $reverse[$value];
								}
								
						}	
					

					 }

					else{ echo "veuillez saisir le texte et choisir votre option";		


					}
	}
	  
	  else{
	  	?>
	  	<!DOCTYPE html>
	  	<html>
	  	<head>
	  		<title>test</title>
	  	</head>
	  	<body>
	  	<h1>veuillez saisir le texte et choisir votre option</h1>
	  	</body>
	  	</html>
	  <?php } 
}

?>