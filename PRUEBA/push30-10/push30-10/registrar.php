<?php
$conexion = mysqli_connect("localhost","root","","admin01");

$id = '';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){

    $id = $_GET['id'];

    mysqli_query($conexion,"UPDATE usuarios SET is_deleted ='1', deleted_at = now() WHERE id= '$id'");
    mysqli_query($conexion,"UPDATE estacionamientos SET is_deleted='1',deleted_at= now() WHERE id= '$id'");
    mysqli_query($conexion,"UPDATE autos SET is_deleted = '1',deleted_at= now() WHERE id= '$id'");
}
$res= mysqli_query($conexion,"SELECT * FROM autos WHERE is_deleted = '0'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="card.css" rel="stylesheet" type="text/css">
    
    <link href="https://unpkg.com/bootstrap4-card-tables@1.2.0/dist/bootstrap4-card-tables.css" rel ="stylesheet">
    <link href="https://unpkg.com/bootstrap4-card-tables@1.2.0/dist/bootstrap4-card-tables.min.css">
    
    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>Tabla de Registros</title>
</head>
<body>

    <br>
    <h1 align="center">ESTACIONAPP  <a class="volver" href="ciudades.html"><img src="/img/flecha.png" align="right"></a></h1>
   
    <br>

    <button type="submit" id="refresh" >Actualizar</button>

    
    
    <br>
    <br>
    <br>
    
<div class="card-deck">
    <div class="tabla1" align="center" >
        <table class= "table table-responsive" >
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
            </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT id,nombre,apellido,telefono FROM usuarios";
                $resultado = mysqli_query($conexion,$sql);
                while($row = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><a href="?id=<?php echo $row['id']; ?>&type=delete"><button onclick= "alerta()" class= "btn btn-warning">Eliminar</button></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <br>
    <br>

        <div class="tabla2 " align="center">
            
        <table class="table table-responsive">
            <thead>
                <th>ID</th>
                <th>Fecha</th>
                <th>Ciudad</th>
                <th>Estacionamiento</th>
                <th>Posición</th>
            </thead>
            <tbody>
                <?php  
                $sql = "SELECT id,fecha,ciudad,lugar,posicion FROM estacionamientos";
                $resultado = mysqli_query($conexion,$sql);
                while($row = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['ciudad']; ?></td>
                    <td><?php echo $row['lugar']; ?></td>
                    <td><?php echo $row['posicion']; ?> </td>
                    <td><a href="?id=<?php echo $row['id']; ?>&type=delete"><button onclick= "alerta()" class= "btn btn-warning">Eliminar</button></a></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
                

 <br>
 <br>

        <div class="tabla3 " align="center">
            
            <table class="table table-responsive">
                <thead>
                    <th>ID</th>
                    <th>Vehiculo</th>
                    <th>Modelo</th>
                    <th>Patente</th>
                    <th>Año</th>
                
                </thead>
                <tbody>
                    <?php  
                    $sql = "SELECT id,tipo,modelo,patente,año FROM autos";
                    $resultado = mysqli_query($conexion,$sql);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?> </td>
                            <td><?php echo $row['tipo']; ?></td>
                            <td><?php echo $row['modelo']; ?></td>
                            <td><?php echo $row['patente']; ?></td>
                            <td><?php echo $row['año']; ?></td>
                            <td><a href="?id=<?php echo $row['id']; ?>&type=delete"><button onclick= "alerta()" class= "btn btn-warning">Eliminar</button></a></td>


                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>  
</div>
   
  
    



    

<div id="afirmar" class="form-group">
 <form action="eliminar.php" method= "POST">
    <div class="form-popup" align="center">
        <h3 align="center" class="text-info">¿Desea eliminar este registro?</h3>
        <br>
        <p>
        <a href="eliminar.php"><button type="submit" class="btn btn-info">Sí</button></a>
       <a id= "cerrar"><button onclick= "closeForm()" type="button" class="btn btn-outline-secondary">No</button> </a>
        </p>
    </div>
 </form>
</div>
     


</body>

<script>
    let refresh = document.getElementById('refresh');
refresh.addEventListener('click', _ => {
            location.reload();
})


</script>

<script>

function openForm() {
  document.getElementById("afirmar").style.display = "block";
}

function closeForm() {
  document.getElementById("afirmar").style.display = "none";
  window.location.href="registrar.php";
 
}
    </script>

<script>

    function alerta(){
        alert("Usuario eliminado");
    }
    </script>

</html>