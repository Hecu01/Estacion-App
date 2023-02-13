<?php


    
  
    $conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");
    

    
   $registros = mysqli_query($conexion,"INSERT INTO estacionamiento(fecha,patente,tipo,modelo,año,llegada,salida) VALUES('$_REQUEST[fecha]','$_REQUEST[patente]','$_REQUEST[tipo]','$_REQUEST[modelo]','$_REQUEST[año]','$_REQUEST[llegada]','$_REQUEST[salida]')")
    or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_close($conexion);
    
   header('location:ciudades.html');
   
    ?>





    



