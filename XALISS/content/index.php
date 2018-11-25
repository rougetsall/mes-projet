<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel='stylesheet' type="text/css" href='../css/style.css'/>
</head>
<body>
	<div id='conterner'>
		<div id='banniere'>
		  <?php include("banniere.php"); ?>
		</div>
		<div id='sub_banniere'>
		</div>
		
		<div id='navigation'>
			<div class="centrer"><?php include("nav.php");  ?></div>
		
		</div>
		<div id='contenue'>
			<div align="right">
			  <?php
				if (isset($_GET['p'])){
					switch ($_GET['p']){
							case 1: 
								include("ajout_user.php"); 
							break;
							
							case 2: 
								include("afficher_user.php"); 
							break;
							
							case 3: 
					include("modif_info_admin.php"); 
							break;
							
							case 4: 
								include("modifier.php"); 
							break;
							
							default : 
							include(".php");
							
							break;	
					}
				}
			  
				else{
				
				include("accueil.php");
				} 
			?>
		  </div>
    </div>
		<div id='sub_footer'>
			
		</div>
		<div id='pied_de_page'>
			<p><span id="copyright symbol">&copy copyright - Tous droits r&eacute;serv&eacute;s : <i><font color="orange">Xaliss</font></i> - </span></p>
		</div>
		<div id='sup_footer'>
			
		</div>
	</div>
</body>
</html>
  