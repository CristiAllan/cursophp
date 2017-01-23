<?php 
	$nome = "CRisti";

	function teste() {
		global $nome; //pra q a function enxergue $nome é necessário chamá-la com o global
		echo $nome;
	}

	function teste2() {
		$nome = "Filhote";
		echo $nome." agora teste2";
	}

	teste();
	teste2();

?>