<?php  
	define("SERVIDOR", "127.0.0.1"); //define constante
	//constantes por convenção usar letra maiuscula
	echo SERVIDOR."<br>";

	/*
	no php 7 é possível criar arrays de constante q seria

	define("BANCO_DE_DADOS", [
		'127.0.0.1',
		'root',
		'password',
		'nome_bd'
	]);
	*/

	//constantes pre definidas

	echo PHP_VERSION;
	echo "<br>";
	echo DIRECTORY_SEPARATOR;
?>