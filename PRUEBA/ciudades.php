<?php

$conexion = mysqli_connect("localhost","root","","proyecto");


if(!isset($_SESSION['rol_id'])){
    header('location:admin.php');
}else {
    if($_SESSION['rol_id']!= 1){
        header('location:admin.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//db.onlinewebfonts.com/c/c03f80ccf879e6f840ca56279854945e?family=Helvetica+Neue" rel="stylesheet" type="text/css"/>     
        <link href="style/city.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" media="(max-width: 800px)" href="example.css" />
        
        <title>Ciudades</title>

    </head>
    <h1 style="font-family: 'Helvetica';">ESTACIONAPP</h1>
    <body>
        
        <style>
           
           body {
            background-color: lightgray;
           }
            h1{
                font-family: "Helvetica";
            }
        </style>
        
<br>
<br>

<div class="rosario">
    <a href="registros.php">
    <img  id="rosario" src="./img/rosario.png" ></a>
</div>

<br>

<div class="sn">
    <a href="registros.php">
    <img id="sn" src="./img/sn.png" ></a>
</div>

<br>

<div class="ram">
    <a href="registros.php">
    <img  id="ramallo" src="./img/ramallo.png"  ></a>
    
</div>

<br>
<br>



<br>
<br>
<br>

<div>
    <a href="tel:147">
    <img id="grua" src= "./img/grua.png" style="border-radius: 50px; width: 50px; height: 50px;"></a>
    <a href="consultas.html">
        <img id="ayuda" src="./img/SOPORTE.PNG" style="border-radius: 50px; width: 50px; height: 50px;" >
    </a>
</div>

<br>
<br>
<br>



<footer class="footer-distributed">

			<div class="footer-left">

				<h3>ESTACIONAPP</h3>
                

				<p class="footer-links">
                    <img class="imagen-footer" src="/img/My project-1mpd.png" style="width:150px; height: 150px; margin-left: 65px; ">
				</p>
                 
                <br>
                <br>
                <br>
                <br>
                
				<p class="footer-company-name" style="font-family: 'Helvetica';">ESTACIONAPP - © 2022</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Echague 315</span> Buenos Aires, Argentina</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+3364 671345</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:estacionapparg@gmail.com" style="font-family: 'Helvetica';">estacionapparg@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Acerca de la compañía</span>
					<p>EstacionApp ofrece un servicio inexistente en la zona, mediante una página web que permitirá a los usuarios encontrar de manera rápida y eficaz estacionamientos disponibles en distintos puntos de la ciudad.
                    </p>
				</p>


				<div>

					<a href="https://instagram.com/romann_m01"><img src="/img/insta.png" style="width: 35px; height:35px; border-radius: 10px;"></a>
					<a href="https://api.whatsapp.com/send?phone=3364671345&text=D%C3%A9jenos%20su%20consulta"><img src="/img/wpp.png" style="width: 35px; height:35px; border-radius: 10px;"></a>

				</div>

			</div>

		</footer>

</body>      
</html>