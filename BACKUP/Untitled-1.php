<?php

$conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");


      
    mysqli_query($conexion,"INSERT INTO vehiculos (fecha,hora,lugar,cars,modelo,año,patente,tiempo,precio) values('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[lugar]','$_REQUEST[cars]','$_REQUEST[modelo]','$_REQUEST[año]','$_REQUEST[patente]','$_REQUEST[tiempo]','$_REQUEST[precio]')")
    or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_close($conexion);

?>