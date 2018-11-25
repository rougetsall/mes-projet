<!DOCTYPE html>
<html>
<head>
<title> projet</title>
<link rel='stylesheet' type="text/css" href='../css/style.css'/>
</head>
<body>
	<div id='conterner'>
		<div id='banniere'>
			Zonne banniere
		</div>
		<div id='navigation'>
			<?php include("nav.php");  ?>
		</div>
		<div id='contenue'>
			<?php
				if(isset($_GET['p'])){
					if($_GET['p']==1){
						include("afficher_etudiant.php");
					}
					if($_GET['p']==2){
						include("ajout_etudiant.php");
					}
					if($_GET['p']==4){
						include("modifier.php");
					}
				}else{
					include('accueil.php');
				}
			?>
		</div>
		<div id='sub_footer'>
			
		</div>
		<div id='pied_de_page'>
			Zonne de pied de mon site web
		</div>
	</div>
</body>
</html>
  