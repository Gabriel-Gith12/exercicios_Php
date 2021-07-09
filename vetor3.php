<?php
/// Exercícios Vetor
/// Crie um vetor com 10 posicoes(keys) onde cada posicao(keys) possui um valor,
/// apos mpostra na tela qual é PAR e qual é IMPAR.
//////////////////////////////////
/// saida:
/// vetor[0] :: 15 - IMPAR
/// vetor[1] :: 2  - PAR
//////////////////////////////////
/// Autor : Nairo A. J. Sanches
/// Data : 2021-06-09
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>vetorFinal</title>
</head>
    <?php
	
	/// Entrada
	$arrayInfo[0]  = 1;
	$arrayInfo[1]  = 2;
	$arrayInfo[2]  = 3;
	$arrayInfo[3]  = 4;
	$arrayInfo[4]  = 5;
	$arrayInfo[5]  = 6;
	$arrayInfo[6]  = 7;
	$arrayInfo[7]  = 8;
	$arrayInfo[8]  = 9;
	$arrayInfo[9]  = 10;
	/// Processamento
	
    ?>	
<body>	
    <?php
	
	/// Saida de Dados
foreach($arrayInfo as $chave=>$gabriel){
	if($gabriel %2 == 0){
		
		$acao ='PAR';
		
	}else{
		
		$acao ='IMPAR';
		
		}
	
		echo 'vetor['.$chave.'] :: '.$gabriel.' - '.$acao.'<br>';
	}
    ?>
</body>
</html>