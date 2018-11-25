
<!DOCTYPE html>
<html>
<head>
	<title>exo</title>
</head>
<body>
<?php
session_start();
function myecho($date){
	echo $date."<br>";
}



myecho("fall ");
myecho("rouget");
echo $_SESSION['nom'];

?>
</body>
</html>