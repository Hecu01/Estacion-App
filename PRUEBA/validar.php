<?php
session_start();
require("conexion.php");
require_once("config.php");

if(isset($_POST['username']) && isset($_POST['contraseña']) && isset($_POST['rol_id'])){
$user = $_POST['username'];
$pass = $_POST['contraseña'];
$rol = $_POST['rol_id'];

$sql = "SELECT * FROM usuarios WHERE username = '$user'";

$resultado = mysqli_query($conexion,$sql);

while($row = mysqli_fetch_assoc($resultado)){
if($row['rol_id'] == 1){
$_SESSION['id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$_SESSION['rol_id'] = $row['rol_id']; 

echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
}else {
    echo 'El usuario no es válido';
}
}


}
?>