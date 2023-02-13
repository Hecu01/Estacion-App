<?php

$precio= 250;
$hora= $_POST['hora'];
$costo;

$costo = $precio * $hora;






    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Document</title>
    </head>
    <body>

        <form method = "POST">
        <label for="">Precio</label>  
                                 
        <input type= "text" name= "precio" id= "precio" value= "<?php echo $costo; ?>">
        <label>Hora</label>
        <input type= "text" name= "hora" id= "hora" >
        <button onclick= "<?php echo $costo; ?>" type="submit" >Calcular Costo</button>  
       
    </form>
    </body>
    </html>

    