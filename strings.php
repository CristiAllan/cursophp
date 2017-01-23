<?php 

	$nome = "Cristi";

	//funções string

	$nome = strtoupper($nome); //deixa texto maiusculo
	echo $nome."<br>";
	
	$nome = strtolower($nome); //tudo minusculo
	echo $nome;

	echo ucwords($nome); //primeira letra  maiuscula

	echo ucfirst($nome); //primeira letra de cada palavra maiuscula

	$nome = str_replace("i", "1", $nome); //substituir letras de strings
	//primeiro parametro a letra a trocar, segundo pelo q trocar e terceiro a variavel ou a string

	/////////////////////////////////////////////////////////

	$frase = "A repetição é a mãe da retenção.";
	$palavra = "mãe";
	$q = strpos($frase, $palavra); //encontra palavra no texto da var procurada


	$texto = substr($frase, 0, $q); // mostra texto até determinado ponto
	//primeiro parametro a var do texto, segundo de onde começar, 0 seria do inicio e ultimo parametro até onde

	//agora mostra a partir da palavra mãe até o fim do texto
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	//strlen conta quantos caracteres tem numa string
?>