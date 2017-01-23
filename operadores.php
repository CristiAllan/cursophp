<?php 
	/*
	= -> recebe
	. -> concatenação

	composto
	tenho uma var $nome="cristi" então se eu fizer
	$nome .= " full stack developer"
	estou atribuindo a concatenação como se faz incrementando um int
	echo $nome; agora vai mostrar "cristi full stack developer
	*/

	$nome = "cristi";
	$nome .= " teste";

	echo $nome;
	var_dump($nome);

	//atribuição com num normal += incrementa -= decrementa
	//curiosidade pra ajudar a descobrir pocentagem 
	echo "<br>";
	$i = 100;
	$i *= .8; //transforma $i em 80% do seu valor ... muito legal

	$a = 15.0; 
	$b = 15;

	var_dump($a>$b); //dentro do var_dump pode colocar expressoes que vão retornar true ou false

	var_dump($a==$b); //aqui compara se são do mesmo valor e não seu tipo ... no caso os ==

	var_dump($a===$b); ///já aqui compara se alem do valor são do mesmo tipo

 ?>