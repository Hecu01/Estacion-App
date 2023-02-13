<html>
<head>
<link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
<link href= "/style/tables.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
</head>
<body>
    

<?php


    
  
    $conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");
    

    
    mysqli_query($conexion,"INSERT INTO estacionamiento (fecha,hora,lugar,cars,modelo,año,patente,tiempo,precio) values('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[lugar]','$_REQUEST[cars]','$_REQUEST[modelo]','$_REQUEST[año]','$_REQUEST[patente]','$_REQUEST[tiempo]','$_REQUEST[precio]')")
    or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_close($conexion);
    
    ?>





    




</body>
</html>