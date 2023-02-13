<?php

$conexion = mysqli_connect("localhost","root","","admin01");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/3f610a59a3c8a0229084ea3e1312738c?family=Helvetica" rel="stylesheet" type="text/css"/>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/style/pass.css" rel="stylesheet" type="text/css">
    <title>Registro</title>
</head>
<body>
    
<div class= "container">
    <form action="" class= "cambiar">
<h3 align= "center"><strong>Modificar contraseña</strong></h3>

<h5><strong>Email</strong></h5>
<input type= "email" name="email" id= "email">
<br>
<br>
<h5><strong>Nueva contraseña</strong></h5>
<input type= "password" name= "pass" id= "pass">
<br>
<br>
<button onclick= "alerta()"class= "btn btn-success" type= "submit">Cambiar Contraseña</button>
</form>
</body>
</html>

<script>
    function alerta() {
        alert('La contraseña se ha cambiado');
    }
    </script>