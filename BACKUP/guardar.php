<?php
	
	require 'conexion.php';
	
	$fecha = $_POST['fecha'];
	$patente = $_POST['patente'];
	$tipo = $_POST['tipo'];
	$hora = $_POST['hora'];
	$lugar = $_POST['lugar'];
	$horallegada = $_POST['horallegada'];
    $horasalida= isset($_POST['horasalida']) ? $_POST['horasalida'] : null;
	

	
	$sql = "INSERT INTO vehiculos (fecha, patente, tipo, hora, lugar, horallegada, horasalida ) VALUES ('$fecha', '$patente', '$tipo', '$hora', '$lugar', '$horallegada', '$horasalida')";
	$resultado = $mysqli->query($sql);
	
?>