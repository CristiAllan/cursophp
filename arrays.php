<?php  
	$frutas = array("laranja", "abacaxi", "melancia"); //vetor pq é unidimensional

	print_r($frutas) // print_r comando q exibe array

	///////////
?>
<br>
<?php  
	//array bidimensional

	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "Eco Sport";

	echo $carros[0][3];
	echo "<br>";

	echo end($carros[1]);
	echo "<br>";

	///////////////////////////////////////
	//funções para manipular array

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Joao',
		'idade' => 20
	));

	array_push($pessoas, array(
		'nome' => 'Cristi',
		'idade' => 22
	));

	print_r($pessoas);
	echo "<br>";
	print_r($pessoas[0]['nome']); 

?>