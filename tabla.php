<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />

    <title>Tabla</title>

  
</head>
<body>

<table>
    <tr id="fecha" name="fecha">
        <td>Fecha</td>
    </tr>
    <tr name="hora" id="hora">
        <td>Hora</td>
    </tr>
    <tr id="lugar" name="lugar">
        <td>Lugar</td>
    </tr>
    <tr id="cars" name="cars">
        <td>Autos</td>
    </tr>
    <tr id="modelo" name="modelo">
        <td>Modelo</td>
    </tr>
    <tr id="año" name= "año">
        <td>Año</td>
    </tr>
    <tr id= "patente" name= "patente">
        <td>Patente</td>
    </tr>
  

<?php
include('registro.php');


$query= "SELECT * from estacionamiento";
$resultados = mysqli_query($con,$query);
while($consulta = mysqli_fetch_array($resultados)){
    
    
    
    ?>

<tr>
            <td><?php echo $consulta['Fecha']."|" ?></td>
            <td><?php echo $consulta['Hora'] ?></td>
            <td><?php echo $consulta['Lugar'] ?></td>
            <td><?php echo $consulta['Autos'] ?></td>
            <td><?php echo $consulta['Modelo'] ?></td>
            <td><?php echo $consulta['Año'] ?></td>
            <td><?php echo $consulta['Patente']?></td>
            <br>
        </tr>

        
</table> 
</body>

</html>
