<?php 

	function somar($a, $b) {
		return $a+$b;
	}

 ?>

 <?php 
//pra não ter q criar outro arquivo pra fazer as chamadas fiz aqui mesmo
//se estivesse em arquivos diferentes o php não reconheceria a função somar, por isso a necessidade do include 

 	//include "include-e-require.php";    //tenta funcionar mesmo q não exista tem mais recursos
 	//require "include-e-require.php";   //obriga q o arquivo exista e q esteja funcionando corretamente


 //obs -> sempre usar require_once ou include_once
 	$resultado = somar(10,20);

  ?>