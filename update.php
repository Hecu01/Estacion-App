<?php



$conexion = mysqli_connect("localhost","root","","admin01");

$id = '';
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0){

    $id = $_GET['id'];

    
    mysqli_query($conexion,"UPDATE estacionamientos  SET is_deleted = 1, deleted_at = now() WHERE estacionamiento_id = '$id'");
    mysqli_query($conexion,"UPDATE autos SET is_deleted = 1, deleted_at = now() WHERE autos_id = '$id'");
    
}




header('location:tabla-registros.php');

?>