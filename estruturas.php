<?php 
	
	$qualASuaIdade = 18;
	
	$idade = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if ($qualASuaIdade < $idade) {
		echo "Criança";
	} elseif ($qualASuaIdade < $idadeMaior){
		echo "Adolescente";
	}	elseif ($qualASuaIdade < $idadeMelhor) {
		echo "Adulto";
	}	else { echo "Idoso"; }

	echo "<br>";

	echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

	//////////////////////////////////////////

	//switch case
	echo "<br>";
	$diaDaSemana = 8; //date("w");

	switch ($diaDaSemana) {
		case 0: echo "Domingo\n";
			break;
		case 1: echo "Segunda\n";
			break;
		case 2: echo "Terça\n";
			break;
		case 3: echo "Quarta\n";
			break;
		case 4: echo "Quinta\n";
			break;
		case 5: echo "Sexta\n";
			break;
		case 6: echo "Sábado\n";
			break;
		default: echo "Inválido\n";
			break;

	}

	//////////////////////////////////
	//For
	echo "<br>";
	/*for ( $i = 0; $i < 1000; $i+=5) {
		
		if ($i > 200 && $i < 800) continue;
		
		if ($i === 900) break;

		echo $i."<br>"; 
	} */

	
	echo "<select>";
		for ($i=date("Y"); $i > date("Y")-10 ; $i--) { 
			
			echo '<option value="'. $i .'">' . $i . "</option>";
		}
	echo "</select>";

	/////////////////////////////////////////////
	//foreach importante
	echo "<br><br>";
	$meses = array(
		"Janeiro", "Fevereiro", "Março", "Abril"
	);

//mostrando apenas o texto dentro de cada indice
	foreach ($meses as $mes) {
		echo "O mês é: ".$mes. "<br><br>";
	}
//mostrando o index tambem
	foreach ($meses as $index => $mes) {
		echo "Indice: ".$index."<br>";
		echo "O mês é: ".$mes. "<br><br>";
	}

	/////////////////////////////////////
	//while

	$condicao = true;
	$y = 1;

	while ($condicao) {
		echo $y."<br>";
			if($y > 3) {
				$condicao = false;
			}
		$y++;
	}

	//agora mesma coisa com dowhile

	$condicao = true;
	$y = 1;

	do {
		echo $y."<br>";
			if ($y > 3) {
				$condicao = false;
			}
		$y++;
	} while($condicao)
 ?>