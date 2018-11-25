<?php 
session_start();


$name = "sall";
echo "Hello ".$name;
$_SESSION['nom']=$name;
$cookietfin = time()+60+60;
setcookie("login","hadaa", $cookietfin);
echo $_COOKIE["login"].'<br>';
echo strlen("sall").'<br>';//longueur
echo str_word_count("string sall rouget").'<br>';//nombre de mots
echo str_repeat("roouuget <br>", 7);//repete

  $text="sall , hada va dormi tu parle bcp";//replacema
  echo str_replace("sall", "rouget", $text,$i).'<br>';//replace
  echo "nombre de repl ".$i;

$voiture =  array(
	"citroen" ,
     "renault" ,
     "peugeat");
    print_r(array_keys($voiture));
    if (in_array("citroen", $voiture)) {
    	echo "<br> existe";
    	# code...
    }

?>
<a href="myEcho.php">aller</a>