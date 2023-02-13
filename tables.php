<?php 
require "registro.php";

$conexion=mysqli_connect("localhost","root","","admin01") or
    die("Problemas con la conexión");
    
    $sql = "SELECT * from estacionamiento";

    $resultado = $conexion->query($sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/3f610a59a3c8a0229084ea3e1312738c?family=Helvetica" rel="stylesheet" type="text/css"/>  
    <link href= "/style/tables.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>Registros</title>
</head>

<body>
    <style>
        
@media (max-width: 600px) {
    .facet_sidebar {
      display: none;
    }
  }

body {
  width: 85%;
}

  h1 {
    font-family: "Helvetica";
  

  }

  table {
   
    margin-left: 2cm;
    margin-right: 2cm;
  }
</style>
    
<h1 align= "center">Registros de usuarios</h1>

<center>
<table class= "table table-bordered"  width="100%"  border= "1px">

<tr>
    <td>Fecha</td>
    <td>Hora</td>
    <td>Lugar</td>
    <td>Vehiculo</td>
    <td>Modelo</td>
    <td>Año</td>
    <td>Patente</td>
    <td >Tiempo</td>
    <td >Precio</td>
    
</tr>

  <?php
  while($datos = $resultado -> fetch_array()){

    ?>
    
        <tr>
            <td><?=$datos['fecha']?></td>
            <td><?=$datos['hora']?></td>
            <td><?=$datos['lugar']?></td>
            <td><?=$datos['cars']?> </td>
            <td><?=$datos['modelo']?></td>
            <td><?=$datos['año']?> </td>
            <td><?=$datos['patente']?></td>
            <td><?=$datos['tiempo']?></td>
            <td><?=$datos['precio']?></td>
        </tr>
  
         <?php   
  }
  ?>
  </table>
</center>
</body>
</html>