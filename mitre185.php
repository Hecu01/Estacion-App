
<?php

$precio= (int)250;
$hora= $_POST["hora"];
$costo;

$costo = $precio * $hora;




?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/reservar-lugar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Mitre 185</title>
    </head>
    <body>
            <div class="title">
                <h1>Reserva tu lugar</h1>
            </div>

            <div class="formulario">
                <form action="registro.php" method= "POST" class="card" id="formulario-reservar-lugar">
                    <h4 style="text-align: center;">Estacionamiento</h4>
                    <h6 style="text-align: center;">M. Mitre 185</h6>
                    <br>
                    <img src="https://streetviewpixels-pa.googleapis.com/v1/thumbnail?panoid=7ZQRsnZhTxuzyFszyzLXbQ&cb_client=search.gws-prod.gps&w=408&h=240&yaw=306.06625&pitch=0&thumbfov=100" alt="" width="130" height="130" style="margin: auto; border-radius: 50%;">
                   <br>
                    <input type="date" name="fecha" id="fecha">
                    <div class="hor-lug">
                        <label for="">Horario</label>
                        <input type="time" name="hora" id="hora" style="margin: 0px 10px;">
                        <label for="">Lugar</label>
                        <select name="lugar" id="lugar" style="margin: 0px 10px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <br>
                    <div class="patente">
                        <label for= "">Patente</label>
                        <input type="text" name="patente" id="patente">
                    </div>
                    <br>
                    <div class="autos">
                    <label for="">Vehiculo</label>
                    <select name="cars" id="cars">
                        <option value="1">Auto</option>
                        <option value="2">Moto</option>
                        <option value="3">Camioneta</option>
                    </select>
                    </div>
                    <br>
                    <div class="model">
                        <label for="">Modelo</label>
                        &nbsp;
                        <input type="text" name="modelo" id="modelo">  
                    </div>
                    <br>
                    <div class="year">
                        <label for="">Año</label>
                        <input type="text" name="año" id="año" style=" width: 50px;">
                    </div>
                </form>   
               
               



                    <form method = "POST" name= "precioporhora">
                    
                   
                    <label>Hora</label>
                    <input type= "text" name= "hora" id= "hora" value= "<?php $hora ?>">
                    <br>
                    <br>
                    <label for="">Precio</label>  
                                            
                    <input type= "text" name= "precio" id= "precio" value= "<?php echo $costo; ?>">
                    <br>
                    <br>
                     
                    <br>
                    <br>
                    <br>
                   <input type="submit" onclick= "mialerta();"class="btn btn-primary" style= "width: 5cm; height: 1cm;">
                   </form>  
              </div>
                    
              <script>




                </script>
                  
                   <style>
                     
                     form .price {
                        position: relative;
                        margin-top: 0px;
                     }

                    </style>
                


                    <br>

                    <script>
                        function mialerta() { 
                            alert("Estacionamiento exitoso");
                        }
                       
                    </script>
      
                  
                

                
               
            
    </body>
</html>


