
    
<?php



$conexion=mysqli_connect("localhost","root","","login") or
die("Problemas con la conexión");




    mysqli_query($conexion,"insert into mitre_185 (fecha,hora,lugar) values
    ('$_REQUEST[fecha]', '$_REQUEST[hora]','$_REQUEST[lugar]')")  
    or die("Problemas en el select".mysqli_error($conexion));
     
   mysqli_query($conexion,"SELECT * FROM log INNER JOIN mitre_185 on log.id = mitre_185.id;");

    mysqli_close($conexion);
    header('location: Estacionar3.html');
    ?>


