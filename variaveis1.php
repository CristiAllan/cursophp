<?php 

	$nome = "Cristi";
	$sobrenome = "Mendonça";

	$nomeCompleto = $nome . " " . $sobrenome; //concatenação
	var_dump($nome); // tipo da variavel em php
	unset($nome); // limpa variável

	if (isset($nome)) { //isset verifica se a variável existe, retorna true ou false
		echo $nome;
	}

	//TIPOS DE DADOS NO PHP

	$nome = "Cristi";
	$email = 'cristiallan@gmail.com';

	$ano = 1994;
	$salario = 1800.50;
	$boolean = false;
	////////////////////
	$frutas = array("abacaxi", "laranja", "manga"); //array

	echo $frutas[2];

	$nascimento = new DateTime();

	/////////////////
	$arquivo = fopen("exemplo-criaarquivo.php", "r"); //criar arquivo fopen

	$nulo = NULL;
	$vazio = "";

?>
