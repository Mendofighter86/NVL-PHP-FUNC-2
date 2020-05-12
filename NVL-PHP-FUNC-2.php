<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
 	<title> Prework </title>
<style>

</style> 
</head>
	<body>


<?php


function cuentaLetraA($a, $letra){
$e= str_split($a);
$i=0;
foreach($e as $k => $v){
	if($v == $letra){
		$i++;}
}
echo $i;
}
cuentaLetraA("En algun lugar de la mancha, de cuuuuyo nombre no quiero acordarme", "u");


?>



	</body>	    
</html>