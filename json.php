<?php  
	require_once "arrays.php";
	echo "<br><br>";
	echo "__________json_______________<br>";

	echo json_encode($pessoas); //transformar array em json

	$json = '[{"nome":"Joao","idade":20},{"nome":"Cristi","idade":22}]';

	$data = json_decode($json, true); //passar o parametro true senão vira objetos e não array
	echo "<br>";
	var_dump($data);
?>