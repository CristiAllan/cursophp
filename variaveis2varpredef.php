<?php 

	$nome = $_GET["a"]; //tem todas variaveis que se recebe atraves da url via get//a var sempre vem como string
	$nome2 = (int)$_GET["a"]; // recebe a var e já converte para inteiro

	/*var_dump($nome);
	var_dump($nome2);*/

	$ip = $_SERVER["REMOTE_ADDR"]; //pega ip do usuario
	$server = $_SERVER["SCRIPT_NAME"];
	echo $server;
 ?>