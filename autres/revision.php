<!DOCTYPE html>
<html>
<head>
	<title>revision</title>
</head>
<body>
<?php
		echo time()."<br>";
		//d rep le jour du mois de 1 a 31
		// m            un mois de 1 a 12
		//n                  ,,,,,,,,,,,
		//Y             l'annes 
		//l.           jour de la semaine ex lundi
		//N.        un jr de la semaine ex lundi=1 dim=7
		//H.        les heures de 0 a 23h
		//i         les minutes  0 a 59mn
		//s         les secondes ,,,,,,,
		echo "nous somme le ".date("d/m/Y")."<br>";
		echo "aujourd'hui c'est ".date("l")."<br>";
		echo "il est ".date("H:i:s");


				/*$jour=array("" ,
					"lundi",
					"mardi",
					"mercredi",
					"jeudi",
					"vendredi",
					"samedi",
					"dimanche"
				 );


				 $mois = array("", 
				 	"Janvier",
				 	"Fevrier",
				 	"Mars",
				 	"Avril",
				 	"Mai",
				 	"Jun",
				 	"Juillier",
				 	"Aout",
				 	"Septembre",
				 	"Octobre",
				 	"Novembre",
				 	"Decembre"
				 );
		$datefr= $jour[date("N")]." ".date("d")." ".$mois[date("n")]." ".date("Y");
		echo "<br>nous sommes le ".$datefr; meme code que le code suivent juste pour affiche la date en france*/
		setlocale(LC_TIME, "fr_FR");
		echo "<br>nous sommes le ".strftime("%A %d %B %Y")."<br/>";
		echo "<br>il est actuellement ".strftime("%H:%M:%S")."<br/>";
		//pour verifie si la date est valide
		$date1 = checkdate(12, 31, 2005);
		$date2 = checkdate(13, 31, -2005);
		if ($date1) {
			echo "la date1 est valide <br>";

		}else {
			echo " date1 pas valide<br>";
		}
         if ($date2) {
			echo "la date2 est valide <br>";

		}else {
			echo "date2 pas valide<br>";
		}


?>
</body>
</html>