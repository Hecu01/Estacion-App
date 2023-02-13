<?php

$conexion = mysqli_connect("localhost","root","","admin01");


$id = '';

if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){

    $id = $_GET['id'];

    mysqli_query($conexion,"UPDATE usuarios SET is_deleted = '1',deleted_at = now() WHERE id = '$id'");
}

$res = mysqli_query($conexion,"SELECT * FROM usuarios WHERE is_deleted = '0'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/eliminar.css">

    <title>Eliminar</title>
</head>
<body>

<div align= "center" style= "margin-top:5cm">

<?php if($res) { ?>
				<h3 align="center">REGISTRO ELIMINADO</h3>
                <a href= "registrar.php"><button class= "btn btn-info">Volver</button></a>
                <?php } else { ?>
                    <h3 align= "center">NO SE PUDO ELIMINAR EL REGISTRO</h3>
                    <a href= "registrar.php"><button class= "btn btn-info">Volver</button></a>
                    <?php } ?>
</div>

</body>

<script>

    function alerta(){
        alert("Usuario eliminado");
    }
    </script>
</html>