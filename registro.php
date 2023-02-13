<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</head>
<body>
    <?php
    
    $ocupado= $_POST['lugar'];
    $accion = $_POST['ocupado'];
  
    $conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");
    
    mysqli_query($conexion, "INSERT into users(cars) values('$_REQUEST[cars]')")
    or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_query($conexion,"INSERT into estacionamiento (fecha,hora,lugar,modelo,año,patente) values
    ('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[lugar]','$_REQUEST[modelo]','$_REQUEST[año]','$_REQUEST[patente]')")
    or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_close($conexion);
    header('location: ciudades.html');
    ?>






</body>
</html>