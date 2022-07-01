<?php
    // Database connected
    include('conn_db.php'); 

    // Datos enviados del formulario
    if(isset($_POST['ingresar_app'])){
        if (strlen($_POST['nombre_usuario']) >= 1 && strlen($_POST['apellido_usuario']) >= 1 && strlen($_POST['patente_usuario']) >= 1){
            $nombre = trim($_POST['nombre_usuario']);
            $apellido = trim($_POST['apellido_usuario']);
            $patente = trim($_POST['patente_usuario']);
            ?>
            <script>
                alert('Bienvenido');
                window.location.href="../pages/Estacionar3.html"
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('ha ocurrido un error');
                window.location.href="../"
            </script>
            <?php
        }
    }else{
        ?>
            <script>
                alert('Rellene todos los campos');
                window.location.href="../"
            </script>
        <?php
    }
    echo' estas aquí'



    /*
        die("Problemas con la conexión");

        mysqli_query($conexion,"insert into login (nombre,apellido,patente) values
        ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[patente]')")
        or die("Problemas en el select".mysqli_error($conexion));

        mysqli_close($conexion);
        echo "Proceso completado exitosamente";
    */
?>
