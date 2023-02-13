<?php

$config = include 'config.php';
$conexion = new PDO('mysql:host=' . $config['db']['dsn'], $config['db']['user'], $config['db']['password']);

try {
    $conexion= new PDO('mysql:host=' . $config['db']['dsn'], $config['db']['user'], $config['db']['password']);

    $sql= file_get_contents("admin01.sql");

    $conexion = exec($sql);
    echo "La base de datos y la tabla de alumnos se han creado con éxito.";
}catch(PDOException $error){
    $error -> getMessage();
}


?>