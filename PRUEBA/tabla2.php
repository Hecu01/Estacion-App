<?php

$conexion = mysqli_connect("localhost","root","","proyecto");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
    <link href="style/admin.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>ESTACIONAPP || Administrador</title>
</head>
<body>
    <div class="sidebar-header">
        <header>
            
            
              <a href="admin.php" style= "text-decoration:none"><h1 align="center">ESTACIONAPP</h1></a>
              
              <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                <ul class="nav nav-pills flex-column mb-auto"  id="est">

                    <br>
                    <a href="ciudades.html"><img src="img/My project-1mpd.png" width= 150px height= 150px></a>
                    <br>
                    <li>
                    <a href="tabla1.php"><img src="img/usuarios.png" width= 25px; height=25px;>Usuarios</a>
                    </li>
                    <br>
                    <br>
        
                    <li>
                    <a href="#est"><img src="img/Parking-Transparent-PNG.png" width="25px" height="25px">Estacionamientos</a>
                    </li>
                    <br>
                    <br>
                    <li>
                    <a href="tabla3.php"><img src="img/Mi proyecto.png" width= 25px height=25px>Autos</a>
                    </li>
                    <br>
                    <br>
                    <li>
                        <a href= "logout.php">Salir</a>
                    </li>
                </ul>
            </div>
               
            
        
            
        </header>
    </div>

    <br>
    <br>
    <div class="tabla2" style="width: 80%; margin-left: 20%" id="estacion">
        <h2 style="font-family: 'Raleway','sans-serif';color: dodgerblue" align="left">Estacionamientos</h2>
        <br>
        <table class="table table-responsive" align="center">
            <thead>
                <th>ID</th>
                <th>Fecha</th>
                <th>Ciudad</th>
                <th>Estacionamiento</th>
                <th>Estado</th>
                
            </thead>
            <tbody>
            <?php
                        $sql = "SELECT * FROM estacionamiento";
                        $resultado = mysqli_query($conexion,$sql);

                        while($row = mysqli_fetch_assoc($resultado)){ ?>
                    <tr>
                        
                        <td><?php echo $row['estacionamiento_id']; ?> </td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['ciudad']; ?></td>
                        <td><?php echo $row['direccion']; ?></td>
                        <td><?php echo $row['estado']; ?></td>
                        <td><a href="eliminar.php"><button class="btn btn-danger" type="submit" name="enviar" id="enviar">Eliminar</button></a></td>
                        <td><a href="modificar.php"><button class="btn btn-warning" type="submit">Editar</button></a></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>