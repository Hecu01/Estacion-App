<?php

$conexion = mysqli_connect("localhost","root","","admin01");

$id = '';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){

    $id = $_GET['id'];

    

    
}

mysqli_query($conexion,"UPDATE estacionamientos  SET is_deleted = 1, deleted_at = now() WHERE estacionamiento_id = '$id'");
mysqli_query($conexion,"UPDATE autos SET is_deleted = 1, deleted_at = now() WHERE autos_id = '$id'");

$res = "SELECT * FROM estacionamientos INNER JOIN autos ON estacionamientos.estacionamiento_id = autos.autos_id WHERE is_deleted = '0'";

$sql = mysqli_query($conexion,$res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="tablaregistros.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="example.css"/>


    <title>Tabla de Registros</title>
</head>
<body>
    
<h1 href="index.html" align="center">ESTACIONAPP</h1>

<br>
<br>
<div class="tabla" align="center">
<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Ciudad</th>
        <th>Estacionamiento</th>
        <th>Cantidad</th>
        <th>Vehiculo</th>
        <th>Modelo</th>
        <th>Patente</th>
    </tr>
</thead>
<tbody>
    <?php
//Se muestran los datos ingresados en la base de datos. !!NO MODIFIQUEN ESTE CÓDIGO!!

$sel= mysqli_query($conexion,"SELECT * FROM estacionamientos JOIN autos ON estacionamientos.estacionamiento_id = autos.autos_id");


    
    

    while($row = mysqli_fetch_assoc($sel)) { ?>
    <tr>
        <td><?php echo $row['estacionamiento_id']; ?></td>
        <td><?php echo $row['fecha']; ?></td>
        <td><?php echo $row['ciudad']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['cant_estacionados']; ?></td>
        <td><?php echo $row['tipo']; ?></td>
        <td><?php echo $row['modelo']; ?></td>
        <td><?php echo $row['patente']; ?></td>
        <td><a href="update.php?id=<?php echo $row['estacionamiento_id']; ?>&type=delete"><button onclick= "alerta()" class= "btn btn-warning">Eliminar</button></a></td>
        <td><button class="btn btn-secondary">Editar</button></td>


    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</body>
</html>

<script>
function alerta() {
    alert('Registro eliminado');
}
    </script>

