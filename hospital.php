<?php 
	// server, username, password, databasename
	$connection= new mysqli('localhost','root','','hospital');

	$sql = 'SELECT * FROM patient';

	$buffer = $connection->query($sql);

	$patient = $buffer->fetch_all(MYSQLI_ASSOC);

	var_dump($patient)
?>
