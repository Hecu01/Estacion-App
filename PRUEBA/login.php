<?php
  
session_start();

$conexion = mysqli_connect("localhost","root","","proyecto");

if(isset($_POST['username']) && isset($_POST['contraseña'])) {

    $user = $_POST['username'];
    $clave = md5($_POST['contraseña']);

    $sql = "SELECT * FROM usuario WHERE username= '$user' AND contraseña= '$clave'";
    $res = mysqli_query($conexion,$sql);
   


    if($row = mysqli_fetch_assoc($res)){
        if($row['rol_id'] == 1){
            echo '<script type= "text/javascript">alert("El usuario no es válido");</script>';
           
        }else {
            if($row['rol_id'] == 2){
          header('location:ciudades.html');
        }
    }
     }

}




?>


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
    <title>Iniciar Sesión</title>
</head>
<body>
    
<form action="" method= "POST" align= "center">


<h2 align="center"><strong>Iniciar Sesión</strong></h2>
<br>
<br>

<h4 align="center"><strong>Usuario</strong></h4>
<br>
<input type= "text" name= "username" id="username" >
<br>
<br>
<br>
<br>
<h4 align="center"><strong>Contraseña</strong></h4>
<br>
<input type= "password" name= "contraseña" id="contraseña" style= "width:250px">
<br>
<br>
<input class= "btn btn-primary" type= "submit" name="enviar" id= "enviar" value= "Ingresar">

<div class= "register">
    <a href= "registro.php" style= "color:black;">¿No tienes cuenta? Regístrate</a> 
</div>
</form>


</body>
</html>

<script type= "text/javascript">
    function admin() {
alert("Bienvenido administrador");
    }

    function NotUser() {
        alert("El usuario no es válido");
    }
</script>

    