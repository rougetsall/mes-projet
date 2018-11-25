<?php

$note = 20;
$trich = true;
$rend = true;
if ($rend == false) {
	echo "Votre nous n'avez pas rendu de devoir";
}
else if ($note == 0) {
	echo "Aucun effort";
}
else if ($note == 5) {
	echo "A essayer";
}
else if ($note == 7) {
	echo "C'est mieux que 5";
}
else if ($note == 10) {
	echo "Pile poil la moyenne";
}
else if ($note == 12) {
	echo "Assez bien";
}
else if ($note == 14) {
	echo "bien";
}
else if ($note == 16) {
	echo "tres bien";
}
else if ($note == 16 && $trich = true) {
	echo "Triche";
}
else if ($note == 20 && $trich == true) {
	echo "Triche excellente";
}
else if ($note == 20) {
	echo "excellent";
}

else {
	# code...
	echo "donne la note"; 
}
?>