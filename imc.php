<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>calculo imc</title>
</head>

<body>	
	
<?php
	
	$peso = 65;
	$altura = 1.75;
		
	$imc = $peso / ($altura * $altura);
		
    if($imc <= 18){
   echo " Magreza ";

   }else if($imc >= 18 && $imc <= 25){
   echo " NORMAL ";
   
   }else if($imc >= 25 && $imc <= 30){
   echo " SOBREPESO ";
   
   }else if($imc >= 30 && $imc <= 40){
   echo " OBESIDADE ";
   
   }else if($imc >= 40){
   	echo " OBESIDADE GRAVE " ;
   	
   	}
	
	echo $imc;

?>
	
</body>
</html>