<?php include "templates/header.php"?>



<?php
include_once "connection.php";
$miConsulta = $bd->prepare("select nombre,apellido from users union select * from estacionamiento");
$miConsulta->execute();
$consulta = $miConsulta->fetchAll();

?>


    
    <div>
        <p><input type="text" name="user"><button onclick="">Buscar Usuario</button></p>
    </div>
 
    

    <div class="p-4">
    <table class="table table-striped">
      <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Patente</th>
            <th>Tipo</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Hora de Entrada</th>
            <th>Hora de Salida</th>
        </tr>
      </thead>

      <tbody>


      <?php
        foreach($consulta as $dato)
        {
      ?>
        <tr>
            <td><?php echo $dato->id; ?></td>
            <td><?php echo $dato->nombre; ?></td>
            <td><?php echo $dato->apellido; ?></td>
            <td><?php echo $dato->fecha; ?></td>
            <td><?php echo $dato->hora; ?></td>
            <td><?php echo $dato->lugar; ?></td>
            <td><?php echo $dato->patente; ?></td>
            <td><?php echo $dato->tipo; ?></td>
            <td><?php echo $dato->modelo; ?></td>
            <td><?php echo $dato->año; ?></td>
            <td><?php echo $dato->llegada; ?></td>
            <td><?phpecho $dato->salida; ?></td>
        </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
      </div>
    <form action="">

    </form>

<?php include 'templates/footer.php' ?>