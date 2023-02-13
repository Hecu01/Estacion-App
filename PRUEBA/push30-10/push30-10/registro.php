<?php

$conexion = mysqli_connect('localhost','root','','admin01')
 or die("Problemas con la conexión");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$ciudad = $_POST['ciudad'];
$estacionamiento = $_POST['lugar'];
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$patente = $_POST['patente'];
$año = $_POST['año'];


    
   $sql = "INSERT INTO usuarios(nombre,apellido,email,telefono) 
   VALUES('$nombre','$apellido','$email','$telefono')";
    $resultado = mysqli_query($conexion,$sql);

    $sql= "INSERT INTO estacionamientos(fecha,ciudad,lugar,estado)
    VALUES('$fecha','$ciudad','$estacionamiento','$estado')";

    $resultado= mysqli_query($conexion,$sql);

    $sql = "INSERT INTO autos(tipo,modelo,patente) 
    VALUES('$tipo','$modelo','$patente')";
     $resultado = mysqli_query($conexion,$sql);

   $update = "UPDATE estacionamientos SET estado = 'Ocupado'";
   $res = mysqli_query($conexion,$update);

header('location:ciudades.html');
   
    ?>





    



