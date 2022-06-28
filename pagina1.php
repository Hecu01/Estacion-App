<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css3.css">
<title>Problema</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","login") or
    die("Problemas con la conexión");

    mysqli_query($conexion,"insert into login (nombre,apellido,patente) values
    ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[patente]')")
    or die("Problemas en el select".mysqli_error($conexion));

    mysqli_close($conexion);
    echo "Proceso completado exitosamente";
    ?>
</body>
</html>