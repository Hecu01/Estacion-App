<?php

$conexion = mysqli_connect("localhost","root","","proyecto");




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
        <link href="style/admin.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    <title>ESTACIONAPP || Administrador</title>
</head>
<body>
    <div class="sidebar-header">
        <header>
            
            <div id="nav-icon4">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <h1 align="center">ESTACIONAPP</h1>
              <br>
              <br>
                <form action= "" method= "POST" align= "center" >
                    <h3 style= "font-family: 'Raleway','sans-serif'">Estacionamiento</h3>
                    <br>
                    <br>
              <select class="form-select" style= "width:15%; margin-left:43%" name="direccion" id="direccion" > 
                        
                        <optgroup label="San Nicolás" >San Nicolás</optgroup>
                            <option value="Mitre 185"  id="est"><a href="https://www.google.com/maps/dir//Estacionamiento+Mitre,+ACC,+Bartolom%C3%A9+Mitre+185,+B2900+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3337316,-60.2304946,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678c4060d399:0x692dcf9fc9efa1e9!2m2!1d-60.2184709!2d-33.3300429!3e0">Mitre 185</a></option>
    
                            <option value="Garibaldi 239" id="est"><a href="https://www.google.com/maps/dir//ESTACIONAMIENTO+24Hs,+Garibaldi+239,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3336112,-60.2182131,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b76788d989bf6d:0x8c4c4e7bced14e26!2m2!1d-60.2160319!2d-33.3336105!3e0">Garibaldi 239</a></option>
    
                            <option value="Garibaldi 130" id="est"><a href="https://www.google.com/maps/dir//Garibaldi+130,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3315689,-60.2159549,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b76789a1afae29:0xc1f8001f517fe5eb!2m2!1d-60.2137662!2d-33.3315734!3e0">Garibaldi 130</a></option>
    
                            <option value="9 de Julio 30" id="est"><a href="https://www.google.com/maps/dir//Estacionamiento+9+de+Julio+Las+24+hs,+9+de+Julio+30,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.405825,-63.5330248,7z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678dd356223f:0x4547b958f199dffe!2m2!1d-60.2197878!2d-33.3314171!3e0">9 de Julio 30</a>
    
                            <option value="Mitre 575" id="est"><a href="https://www.google.com/maps/dir//Bartolom%C3%A9+Mitre+575,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.337796,-60.2283403,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b767908f9bb63b:0x7f67df3a299e5c74!2m2!1d-60.2261516!2d-33.3378005!3e0">Mitre 575</a></option>
    
                            <option value="San Martin 28" id="est"><a href="https://www.google.com/maps/dir//San+Mart%C3%ADn+28,+San+Nicol%C3%A1s+de+Los+Arroyos,+Provincia+de+Buenos+Aires/@-33.3328185,-60.2223934,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x95b7678e66a19241:0x636cc611747d2c60!2m2!1d-60.2202047!2d-33.332823!3e0">San Martin 28</a></option>
    
                            <optgroup label="Rosario">Rosario</optgroup>
                            <option value="Balcarce 930" id="est"><a href="https://goo.gl/maps/ssLLF4A4C5r6gKZQ9">
                            Balcarce 930</a></option>
                            <option value="3 de Febrero" id="est"><a href="https://goo.gl/maps/Gb54aujKpFsopUwn8">
                                <img src="img/3defparking.png" class="efectoPrueba" >
                            3 de Febrero</a></option>
    
                            <option value="9 de Julio 2248" id="est"><a href="https://goo.gl/maps/15wvwRy4XHMrXFXq5">
                                <img src="img/9dej.png" class="efectoPrueba" >9 de Julio 2248
                            </a></option>
    
                            <option value="Montevideo 2445"  id="est"><a href="https://goo.gl/maps/KhatCCaXfrvUbqTm6"><img src="img/mont.png" class="efectoPrueba" >montevideo 2445</a></option>
    
                            <option value="España 1045" id="est"><a href="https://goo.gl/maps/Tnzkmem4c6oKayYWA"><img src="img/españa.png" class="efectoPrueba">España 1045</a></option>
    
                            <option value="Zeballos 2245" id="est"><a href="https://goo.gl/maps/RcXsSBaa97DEXzp56"><img src="img/zeballos.png">Zeballos 2245</a></option>
    
                            <option value="Pellegrini 1943" id="est"><a href="https://goo.gl/maps/4zeYUWGVyiA79dE88"><img src="img/pellegrini.png">Pellegrini 1943</a></option>
                            <optgroup label="Ramallo">Ramallo</optgroup>
    
                            <option value="Estación Ferrocarril" id="est"><a href="https://www.google.com/maps/dir/-33.3785912,-60.1789127/Estaci%C3%B3n+de+Ferrocarril+Villa+Ramallo,+Unnamed+Road,+Villa+Ramallo,+Provincia+de+Buenos+Aires/@-33.4535691,-60.2658133,11z/data=!3m1!4b1!4m13!1m2!2m1!1sestacionamientos+ramallos!4m9!1m1!4e1!1m5!1m1!1s0x95b9e3a4aa863829:0x626b29c6d1f7ca9!2m2!1d-60.0679259!2d-33.5016766!3e0"><img src="img/ferro.png"  width="130" height="130" style=" border-radius: 50%;">Estación Ferrocarril
                            </a></option>
    
                            <option value="Camping Las Carpas" id="est" ><a href="https://goo.gl/maps/5NyQyK9Usf4HDAxT7"><img src="img/carpa.png" alt="" width="130" height="130" style="margin: auto; border-radius: 50%;">Camping "Las Carpas"</a></option>
    
                            <option value="Complejo Non Stop" id="est"><a href="https://goo.gl/maps/Daw26BezL5YTNzZSA">Complejo Non Stop</a></option> 
                        </select> 
                        <br>
                        <br>
                        <select class= "form-select" style= "width:15%; margin-left:43%" name= "estado" id= "estado" >
                    <option value= "">Estado</option>
                    <option value= "0">Disponible</option>
                    <option value= "1">Ocupado</option>
                        </select>
                    <br>
                    <br>
                    
                        <input type= "submit" class= "guardar" value= "Guardar">
</form> 



              <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                <ul class="nav nav-pills flex-column mb-auto"  id="sideBarcollapse">

                    <br>
                    <a href="ciudades.html"><img src="img/My project-1mpd.png" width= 150px height= 150px></a>
                    <br>
                    <li>
                        <img src="img/usuarios.png" width= 25px; height=25px;><a href="tabla1.php">Usuarios</a>
                    </li>
                    <br>
                    <br>
        
                    <li>
                    <img src="img/Parking-Transparent-PNG.png" width="25px" height="25px"> <a href="tabla2.php">Estacionamientos</a>
                    </li>
                    <br>
                    <br>
                    <li>
                        <img src="img/Mi proyecto.png" width= 25px height=25px>  <a href="tabla3.php">Autos
                    </li>
                    <br>
                    <br>
                    <li>
                        <a href= "logout.php">Salir</a>
                    </li>
                </ul>
            </div>
               
            
        
            
        </header>
    </div>
 
    
    


</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
    <link href="style/admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
    
</head>
<body>
    <br>
    <br>
    <br>
    <br>
  
 <br>
 <br>
 <br>
   
</body>
</html>