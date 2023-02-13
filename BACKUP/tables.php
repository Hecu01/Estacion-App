<?php 
require "registro.php";

$sql= "SELECT * from vehiculos";
$resultado = $mysqli->query($sql);

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
  <form action= "<?php $_SERVER['PHP-SELF']; ?>" method= "POST"> 
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
   while($row = $resultado -> fetch_array(MYSQLI_ASSOC)) {
    ?>
    
        <tr>
            <td><? echo $row['fecha']; ?></td>
            <td><? echo $row['patente']; ?></td>
            <td><? echo $row['tipo']; ?></td>
            <td><? echo $row['año']; ?></td>
            <td><? echo $row['lugar']; ?></td>
            <td><? echo $row['horallegada']; ?> </td>
            <td><? echo $row['horasalida']; ?></td>
           
           
        </tr>
  
         <?php   
 }
  ?>
  </table>
  </form>
</center>
</body>
</html>