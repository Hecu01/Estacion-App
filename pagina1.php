<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css3.css">
<title>login</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");

    mysqli_query($conexion,"insert into estacionamiento (fecha,hora,lugar,patente) values
    ('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[lugar]','$_REQUEST[patente]')")
    or die("Problemas en el select".mysqli_error($conexion));

    mysqli_close($conexion);
    echo 'Estacionamiento exitoso';
    ?>
</body>
</html>