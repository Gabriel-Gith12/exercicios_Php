<?php
/// Exercícios Vetor
/// Autor : Nairo A. J. Sanches
/// Data : 2021-06-09
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>vetor2</title>
</head>
	<?php
	/// Entrada
	$arrayInfo['Nome']  = 'Nairo';
	$arrayInfo['Idade'] = '40';
	$arrayInfo['Sexo']  = 'Masculino';
	/// Processamento
	?>
<body>
	<?php
	/// Saida de Dados
		/*for($i=0;$i<3;$i++){
			echo $arrayInfo[$i].'<br>';
		}
		*/
	foreach($arrayInfo as $chave=>$gabriel){
		echo $chave.'=>'.$gabriel.'<br>';
	}
		
	?>
</body>
</html>