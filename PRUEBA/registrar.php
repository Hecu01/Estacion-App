<?php

$conexion = mysqli_connect("localhost","root","","proyecto");

$fecha = $_POST['fecha'];
$ciudad = $_POST['ciudad'];
$estacionamiento = $_POST['direccion'];
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$patente = $_POST['patente'];



$sql= "INSERT INTO estacionamiento(fecha,ciudad,direccion,estado)
VALUES('$fecha','$ciudad','$estacionamiento','$estado')";
$resultado= mysqli_query($conexion,$sql);


$sql = "INSERT INTO autos(tipo,modelo,patente) VALUES('$tipo','$modelo','$patente')";
$resultado= mysqli_query($conexion,$sql);

$upd = "UPDATE estacionamiento SET estado = 1";
$res = mysqli_query($conexion,$upd);

header('location:ciudades.html');
?>