

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href="style/inicio.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="example.css"/>
    <title>ESTACIONAPP || Registro de Usuario</title>
</head>
<body>


    
<form action="" class= "registro" method = "POST" autocomplete = "on">
<h2 align= "center" style= "font-family: 'Raleway', 'sans-serif';"><strong>Registrar Usuario</strong></h2>
<?php
include("conexion.php");
    include("registrar.php");
?>
    <br>
    <br>
    <h3>Nombre de Usuario</h3>
    <input type = "text" name= "username" id= "username" class= "form-control" >
    <br>
    <br>
    <h3>Nombre</h3>
    <input type = "text" name= "nombre" id= "nombre" class= "form-control">
    <br>
    <br>
    <h3>Apellido</h3>
    <input type= "text" name= "apellido" id="apellido" class= "form-control">
    <br>
    <br>
    <h3>Correo electrónico</h3>
    <input type= "email" name= "email" id= "email" class= "form-control"> 
    <br>
    <br>
    <h3>Contraseña</h3>
    <input type= "password" name= "contraseña" id="contraseña" class= "form-control">
     <br>
     <br>
     <h3>Repetir Contraseña</h3>
     <br>
     <input type= "password" name="rpass" id= "rpass" class= "form-control">
     <br>
     <br>
     <input class= "btn btn-primary" type= "submit" name="enviar"  value= "Registrar" onclick= "alert('Registro exitoso')">

     <?php


     ?>
</form>
</body>
</html>