<?php


$conexion = mysqli_connect('localhost','root','','admin01')
 or die("Problemas con la conexión");



$fecha = $_POST['fecha'];
$ciudad = $_POST['ciudad'];
$estacionamiento = $_POST['direccion'];
$estado = $_POST['estado'];
$estacionados = $_POST['cant_estacionados'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$patente = $_POST['patente'];
$año = $_POST['año'];


    
 

    $sql= "INSERT INTO estacionamientos(fecha,ciudad,direccion,estado,cant_estacionados)
    VALUES('$fecha','$ciudad','$estacionamiento','$estado','$estacionados')";
   $resultado= mysqli_query($conexion,$sql);


   $sql = "INSERT INTO autos(tipo,modelo,patente) VALUES('$tipo','$modelo','$patente')";
    $resultado= mysqli_query($conexion,$sql);

    

   $upd = "UPDATE estacionamientos SET estado = 1, cant_estacionados = cant_estacionados +1";
   $res = mysqli_query($conexion,$upd);

header('location:ciudades.html');
   
    ?>





    



