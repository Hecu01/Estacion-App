<?php

$conexion = mysqli_connect("localhost","root","","admin01");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="registro.php"  class="formulario" method="POST" name="formular" autocomplete="on" onload="estado()">

                        <div class="contenedor-practico">
                            <h1 class="form-title" style="text-align: center;">ESTACIONAPP</h1>
        
                            <br>
                            <!-- Nombre apellido row -->

                           
                            <div class="identificador-row-1 estacionarme-en inputs-con-misma-clase " id="" >


                                <br>

                                <input type="date" class="nombre-apellido inputs-con-misma-clase lugar" id="fecha" style="width: 92%; margin: auto;" name="fecha">
                                      
                            </div>
                            <br>
            
    
                            <div class="identificador-row-1 estacionarme-en inputs-con-misma-clase " >

                                <select name="direccion"  id="direccion" onchange="cambio()">
                                    
                                    <option value="default" selected disabled hidden>Estacionarme en</option>
                                    <optgroup label="San Nicolás">San Nicolás</optgroup>
                                        <option value="Mitre 185"><a href="https://www.google.com/maps/dir//Estacionamiento+Mitre,+ACC,+Bartolom%C3%A9+Mitre+185,+B2900+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3337316,-60.2304946,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678c4060d399:0x692dcf9fc9efa1e9!2m2!1d-60.2184709!2d-33.3300429!3e0">Mitre 185</a></option>
                                        <option value="Garibaldi 239"><a href="https://www.google.com/maps/dir//ESTACIONAMIENTO+24Hs,+Garibaldi+239,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3336112,-60.2182131,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b76788d989bf6d:0x8c4c4e7bced14e26!2m2!1d-60.2160319!2d-33.3336105!3e0">Garibaldi 239</a></option>
                                        <option  value="Garibaldi 130"><a href="https://www.google.com/maps/dir//Garibaldi+130,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3315689,-60.2159549,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b76789a1afae29:0xc1f8001f517fe5eb!2m2!1d-60.2137662!2d-33.3315734!3e0">Garibaldi 130</a></option>
                                        <option value="9 de Julio 30"><a href="https://www.google.com/maps/dir//Estacionamiento+9+de+Julio+Las+24+hs,+9+de+Julio+30,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.405825,-63.5330248,7z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678dd356223f:0x4547b958f199dffe!2m2!1d-60.2197878!2d-33.3314171!3e0">9 de Julio 30</a>
                                        <option value="Mitre 575"><a href="https://www.google.com/maps/dir//Bartolom%C3%A9+Mitre+575,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.337796,-60.2283403,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b767908f9bb63b:0x7f67df3a299e5c74!2m2!1d-60.2261516!2d-33.3378005!3e0">Mitre 575</a></option>
                                        <option value="San Martin 28"><a href="https://www.google.com/maps/dir//San+Mart%C3%ADn+28,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3328185,-60.2223934,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678e66a19241:0x636cc611747d2c60!2m2!1d-60.2202047!2d-33.332823!3e0">San Martin 28</a></option>
                                        <optgroup label="Rosario">Rosario</optgroup>
                                        <option value="Balcarce 930"><a href="https://goo.gl/maps/ssLLF4A4C5r6gKZQ9">
                                        Balcarce 930</a></option>
                                        <option value="3 de Febrero"><a href="https://goo.gl/maps/Gb54aujKpFsopUwn8">
                                            <img src="img/3defparking.png" class="efectoPrueba" >
                                        3 de Febrero</a></option>
                                        <option value="9 de Julio 2248"><a href="https://goo.gl/maps/15wvwRy4XHMrXFXq5">
                                            <img src="img/9dej.png" class="efectoPrueba" >9 de Julio 2248
                                        </a></option>
                                        <option value="Montevideo 2445"><a href="https://goo.gl/maps/KhatCCaXfrvUbqTm6"><img src="img/mont.png" class="efectoPrueba" >Montevideo 2445</a></option>
                                        <option value="España 1045"><a href="https://goo.gl/maps/Tnzkmem4c6oKayYWA"><img src="img/españa.png" class="efectoPrueba">España 1045</a></option>
                                        <option value=""><a href="https://goo.gl/maps/RcXsSBaa97DEXzp56"><img src="img/zeballos.png">Zeballos 2245</a></option>
                                        <option value="Pellegrini 1943"><a href="https://goo.gl/maps/4zeYUWGVyiA79dE88"><img src="img/pellegrini.png">Pellegrini 1943</a></option>
                                        <optgroup label="Ramallo">Ramallo</optgroup>
                                        <option value="Estación Ferrocarril"><a href="https://www.google.com/maps/dir/-33.3785912,-60.1789127/Estaci%C3%B3n+de+Ferrocarril+Villa+Ramallo,+Unnamed+Road,+Villa+Ramallo,+Provincia+de+Buenos+Aires/@-33.4535691,-60.2658133,11z/data=!3m1!4b1!4m13!1m2!2m1!1sestacionamientos+ramallos!4m9!1m1!4e1!1m5!1m1!1s0x95b9e3a4aa863829:0x626b29c6d1f7ca9!2m2!1d-60.0679259!2d-33.5016766!3e0"><img src="img/ferro.png"  width="130" height="130" style=" border-radius: 50%;">Estación Ferrocarril
                                        </a></option>
                                        <option value="Camping Las Carpas"><a href="https://goo.gl/maps/5NyQyK9Usf4HDAxT7"><img src="img/carpa.png" alt="" width="130" height="130" style="margin: auto; border-radius: 50%;">Camping "Las Carpas"</a></option>
                                        <option value="Complejo Non Stop"><a href="https://goo.gl/maps/Daw26BezL5YTNzZSA">Complejo Non Stop</a></option>  
                                </select>
                        
                            </div>
                            <br>

                            <select style="margin-left:5%" name= "estado" id= "estado" onchange= "cambio()">
                                <option value= "">Estado</option>
                                <option value= "0">Disponible</option>
                                <option value= "1">Ocupado</option>
                                    </select>
                                    
                                    <br>
                                    <br>
                            <div class="identificador-row-1-ciudad-vehiculo seleccione-ciudad  " id="">
                                <div class="sub-identificador-ciudad-vehiculo sub-a-4">
                                    
                                    <select name="ciudad" class="inputs-con-misma-clase" id="ciudad" >
                                        <option value="default" selected disabled hidden>Seleccione ciudad</option>
                                        <option value="San Nicolás">San Nicolás</option>
                                        <option value="Ramallo">Ramallo</option>
                                        <option value="Rosario">Rosario</option>
                                    </select>


                                    <select name="tipo" class="inputs-con-misma-clase" id="tipo">
                                        
                                        <option value="default" selected disabled hidden>Vehículo</option>
                                        <option value="Auto">Auto</option>
                                        <option value="Moto">Moto</option>
                                        <option value="Camioneta">Camioneta</option>
                                    </select>
                                </div>
                                   
    
                                
    
                                <br>
                            </div>
                            <br>
                            <div class="identificador-row-1 form-group ">
                                <div class="sub-identificador">
                                    <input type="text" class="nombre-apellido inputs-con-misma-clase"  id="modelo" placeholder="Modelo (Peugeot, Renault..)" name="modelo">
                                </div>
                                <br>
                                
                                <div class="sub-identificador ">
                                    <input class="nombre-apellido inputs-con-misma-clase"  type="text" id="patente" placeholder="Patente (XX-X-X-123)" name="patente">

                                </div>           
                            </div>
                            <br>
                            <div>

                                <div class="justificador-center d-flex justify-content-center">
                                    <br>
                                    <input type="submit" class="btn btn-primary" onclick="miAlerta()" name="enviar" id="enviar" value="Enviar" >
                                </div>
        
                            </div>
       
        

                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<script>

    function cambio() {
    
        
        
        $("#direccion").change(function(){
                
      if($("#estado").val() == 0){
         $("#direccion option:selected").prop('disabled',false);
         $('#enviar').attr('disabled',false);
         $('#estado option[value= "0"]').prop('selected','selected');
       } else if($('#estado').val() == 1){
        $("#direccion option: selected").prop('disabled',true);
        $('#enviar').attr('disabled','disabled');
        $('#estado option[value = "1"]').prop('selected','selected');
        }
      
    });
    
    }
    
    
    
        </script>