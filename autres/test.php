<<?php

$inscription=$_POST["inscription"];
$testemail=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$tab[]="";
$i=0;
if (isset($inscription)) {
					if (ctype_alpha($_POST["prenom"]) && strlen($_POST["prenom"]) >=2) {
						 echo "cool";
				        $prenom=$_POST["prenom"];
						//
						//if ($testemail) {
							
						//}
						//else{
						//	echo
						//}
					}
						else{ 
							$tab[$i]="votre prenom doit etre au moin superieur a 2 <br> doit contenir que des caractères alphabétique";
							$i++;
						
						}
				       

                      if (ctype_alpha($_POST["nom"]) && strlen($_POST["nom"]) >=2) {
		 
				          $nom=$_POST["nom"];
						
		                  }
						else{
							$tab[$i]="votre nom doit etre au moin superieur a 2 <br> doit contenir que des caractères alphabétique";$i++;

						}
	                   
                          if ($testemail== TRUE) {
		                  	# code...
		                  
		                 $email=$_POST["email"];
		                 

		                  }
		                  else{
		                  	$tab[$i]="votre eamil n'est pas valide...";$i++;
		                  }
		               if (intval($_POST["age"])<160 && intval($_POST["age"])>13  ) {
		               	$age=$_POST["age"];
		               }
                       else{
                       	   $tab[$i]="age doit contenir que des chiffres | doit être inférieur à 160 | doit être supérieur à 13";
                       }
                       if ($_POST["Bachelor"]=="dev" && $_POST["Bachelor"]=="business" && $_POST["Bachelor"]=="design" ) {
                        $bachelor=$_POST["Bachelor"];$i++;
                       }
                       else{
                       	    $tab[$i]="bachelor doit contenir  dev ou business ou design";$i++;
                       }
                     if (strlen($_POST["mdp"])>=12) {
                     	$pwd=$_POST["mdp"];
                     }
                     else{
                     	$tab[$i]="le mot de passe contenir au moins 12 caractères";$i++;
                     }
                     if (strlen($_POST["rmdp"])>=12 && $_POST["rmdp"]=$_POST["mdp"]) {
                     	$retape=$_POST["rmdp"];
                     	# code...
                     }
                      else{
                      $tab[$i]=" retapez mdp doit contenir au moins 12 caractères | doit être égal au champ Mot de passe";$i++;
                      }


                      if ($_POST["sexe"]="femme" && $_POST["sexe"]="homme" ) {
                     	$sexe=$_POST["sexe"];
                     }
                     else{
                     	$tab[$i]="le sexe doit contenir au Femme ou Homme";$i++;
                     }
                     if (strlen($_POST["voyageur"])>=1) {
                     	$tome=$_POST["voyageur"];
                     }
                     else{
                     	$tab[$i]="tome doit contenir au moins 1 tome séléctionné";
                     	$i++;
                     }

		                 echo strlen($tab);

        if (strlen($tab)>0) {
        	for ($i=0; $i < strlen($tab); $i++) { 
        	 
        		# code...
        		?>
        		<!DOCTYPE html>
					<html>
					<head>
						<title>formation</title>
					</head>
					<body>
						<ul>
		        			<li>
        			<?php echo $tab[$i]."<br>";?>
        		  </li> 
        	      </ul><?php }}
        	      else {

        	      ?>

    <table>
    	<tr>
    		<td>PRENOM</td>
    		<td><?php echo $prenom; ?></td>
    	</tr>
    	<tr>
    		<td>NOM</td>
    		<td><?php echo $nom; ?></td>
    	</tr>
    	
    </table>
</body>
</html>

    <?php }

        	
        	# code...
        
}
?>





