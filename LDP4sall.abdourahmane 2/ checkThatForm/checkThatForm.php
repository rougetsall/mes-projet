<?php



if (isset($_POST["inscription"])) {
$testemail=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$taberreur=[];
 
$liste=["prenom","nom","email","age","bachelor","mdp","rmdp"];
	             foreach ($liste as $key => $value) {
	             	if ($_POST[$value]==NULL) {
	             		array_push($taberreur,$value." n'est pas rempli");
	                  	# code...
	                  }
	             }
	                  
					if (!ctype_alpha($_POST["prenom"])){
						array_push($taberreur," le prenom doit contenir que des caractères alphabétique");
	                  
					} 
						elseif (strlen($_POST["prenom"])<2) {
							# code
							array_push($taberreur," le prenom doit contenir au moin 2 caractères");}

						 
						 else{ $prenom=$_POST["prenom"];}
				     
						
					if (!ctype_alpha($_POST["nom"])){
                        array_push($taberreur," le nom doit contenir que des caractères alphabétique");
	                  

					}


					 elseif (strlen($_POST["nom"]) <2) {
					  	# code...
					  	array_push($taberreur,"le prenom doit contenir au moin 2 caractères");
	                  
                         } 
					    else {
					    	$nom=$_POST["nom"]; 
					    }
		 
                          if ($testemail== TRUE) {
		                 
		                 $email=$_POST["email"];}

		                   
		                  elseif ($testemail== FALSE) {
		                  	# code...
		                  	array_push($taberreur,"votre eamil n'est pas valide...");
	                         
		                  }
		                  	
		               if (intval($_POST["age"])<160 && intval($_POST["age"])>13  ) {
		               	$age=$_POST["age"];
		               }
                       elseif (intval($_POST["age"])>160) {
                       	# code...
                       	array_push($taberreur,"doit être inférieur à 160");
	                       
                       }
	                  elseif (intval($_POST["age"])<13) {
	                  	# code...
	                  array_push($taberreur,"doit être supérieur à 13");
	                  	  
	                  }

                       
                        
                       if ($_POST["bachelor"]!="dev" && $_POST["bachelor"]!="business" && $_POST["bachelor"]!="design") {
                       	# code...
                       	 array_push($taberreur,"bachelor doit contenir  dev ou business ou design");
	                 
                       } 
                       else{
                       	$bachelor=$_POST["bachelor"];
                       }
                       
                       	     
                     if (strlen($_POST["mdp"])>=12) {
                     	$pwd=$_POST["mdp"];
                     }
                     elseif (strlen($_POST["mdp"])<12) {
                     	# code...
                     	array_push($taberreur,"le mot de passe contenir au moins 12 caractères");
	                 
                     }
                     if ( $_POST["rmdp"]!=$_POST["mdp"]) {
                     	
                     	# code...
                     	array_push($taberreur,"retapez mdp doit être égal au champ Mot de passe");
	                 
                     }
                      elseif (strlen($_POST["rmdp"])<12) {
                      	# code...
                      	array_push($taberreur,"le mot de passe contenir au moins 12 caractères");
	                 
                      }
                      else{
                      	$retape=$_POST["rmdp"];
                      }
                      
                      if (isset($_POST["sexe"])) {
                      	# code...
                      	 if ($_POST["sexe"]!="femme" && $_POST["sexe"]!="homme" ) {
                     array_push($taberreur,"le sexe doit contenir au Femme ou Homme");
	                 
                      }
                   
                     	
                     }
                     	
                     if (isset($_POST["tome"])) {
                     	foreach ($_POST["tome"] as $key => $value) {
                     		# code...
                     		$tome=$value;
                     	}
                     	
                     }
                     elseif (!isset($_POST["tome"])) {
                     	# code...
                     	array_push($taberreur,"tome doit contenir au moins 1 tome séléctionné");
	                 
                     }

	
       
                           		?>
<!DOCTYPE html>
<html>
<head>
	<title >forme</title>
	<style type="text/css">
		.erreurs{
			margin: auto;
			background-color: blue;
			width: 600px;
			border-radius: 10px;
		}
		body{
			background-color: #00DFA4
;
		}
	</style>
</head>
<body>
						<div class="erreurs">  
					    

						    		<?php  if (sizeof($taberreur)>1) {
			                   ?> 
							    	<h2 style="text-align: center;"><?php echo "Les erreurs...<br>";?> 
							    	</h2><?php
			                   ?> <ul>
						    	<?php
						        	foreach ($taberreur as $key => $value) {
						        		# code...?> 
									    	<li><?php
						                      echo $value."<br>";?>
									    	 </li>
									     <?php
									 }?>
					    </ul> <br><img style="margin: auto; margin-left: 150px; border-radius: 15px;" src="https://risibank.fr/cache/stickers/d311/31114-full.jpg"></div> <?php
			}
			    else{?>
					    	<div style="margin: auto;background-color: blue; margin-top:15%;">
								<table style="margin: auto;" border="1">
								<table style="margin: auto;" border="1">
									<?php 
		                     foreach ($liste as $key => $value) {
		                     	?> <tr>
										<td><?php echo $value;?> </td>
		                               <td><?php echo $_POST[$value];?> </td>
										 
										</tr>
										
		                          <?php }?>
										<td><?php echo "sexe: ";?></td>
										<td><?php echo $_POST["sexe"];?></td>
									</tr>
									
										
										<td><?php echo "Tome(s) favoris de H2G2: ";?></td>
										<td><?php echo join(', ', $_POST['tome']); ?></td>
									</tr>
									<tr>
										<td>Commentaire</td>
										<td><?php echo  "< b > si c'est text s'affiche en gras, u lost the game </ b >";?></td>
									</tr>
								</table>
								</div>
                     
                   <?php  }?><a href="http://localhost:8888/LDP4sall.abdourahmane/%20checkThatForm/" >Retour</a>




        	<?php	
        	
     }   
     else{ 
     		header("location:index.php");
     }
?>

</body>
</html>




