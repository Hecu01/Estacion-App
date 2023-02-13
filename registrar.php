<?php

$conexion = mysqli_connect("localhost","root","","admin01");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="tablas.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>Document</title>
</head>
<body>
    
    
    
    <br>
    <div>
    <h2 class="text-primary text-decoration-underline" style= "font-family: 'Helvetica'" align="center">Datos de usuario</h2>
</div>
    <br>
   
			<div>
                    <button type="submit" id= "refresh">Actualizar</button>
				</div>
<br>


<div class= "tabla1" style="float: left; width: 30%;">
    <table class="table table-striped">
<thead>
       <th>ID</th> 
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Telefono</th>
    </thead>

    <tbody>
        <?php
    $sql = "SELECT id,nombre,apellido,telefono FROM usuarios";

    $resultado = mysqli_query($conexion,$sql);
    while($row= mysqli_fetch_assoc($resultado)){
?>
<tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
    </tr>
        <?php } ?>
    </tbody>

    </table>
</div>

    <div class="tabla2" style="float: left; width: 30%;">
        <table class="table table-striped">
         <thead>
            <th>Fecha</th>
            <th>Ciudad</th>
            <th>Lugar</th>
         </thead>

         <tbody>
         <?php
    $sql1 = "SELECT fecha,ciudad,lugar FROM estacionamientos";

    $resultado = mysqli_query($conexion,$sql1);
    while($row= mysqli_fetch_assoc($resultado)){
?>
    <tr>
          <td><?php echo $row['fecha']; ?></td>
        <td><?php echo $row['ciudad']; ?></td>
        <td><?php echo $row['lugar']; ?></td>
    </tr>
        <?php } ?>
         </tbody>
        </table>
   
  </div>

  <div class="tabla3" style=" float:left; width:30%;">
    <table class="table table-striped">
<thead>
    <th>Vehiculo</th>
    <th>Modelo</th>
    <th>Patente</th>
    <th>Año</th>
</thead>

<tdbody>
<?php
    $sql2 = "SELECT tipo,modelo,patente,año FROM autos";

    $resultado = mysqli_query($conexion,$sql2);
    while($row= mysqli_fetch_assoc($resultado)){
?>
<tr>
    <td><?php echo $row['tipo']; ?></td>
        <td><?php echo $row['modelo']; ?></td>
        <td><?php echo $row['patente']; ?></td>
        <td><?php echo $row['año']; ?></td>
    </tr>
        <?php } ?>
</tdbody>
    </table>
  </div>

    
</body>
<script>
    let refresh = document.getElementById('refresh');
refresh.addEventListener('click', _ => {
            location.reload();
})
</script>
</html>