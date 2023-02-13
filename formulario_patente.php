<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/reservar-lugar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Garibaldi 239</title>
    </head>
    <body>
        <div class="contenedor">
            <div class="title">
                <h1>Reserva tu lugar</h1>
            </div>
            <div class="formulario">
                <form  class="card" method= "post" action= " ciudades.html">
                    
                    <h4 style="text-align: center;">Estacionamiento</h4>
                    <h6 style="text-align: center;">Garibaldi 239</h6>
                    <br>
                    <img src="img/garibaldu.png" alt="" width="130" height="130" style="margin: auto; border-radius: 50%;">
                  <br>
                    <input type="date" name="" id="">
                    <div class="hor-lug">
                        <label for="">Horario</label>
                        <input type="time" name="" id="" style="margin: 0px 10px;">
                        <label for="">Lugar</label>
                        <select name="lugar" id="lugar" style="margin: 0px 10px;">
                            <option value="lugar">1</option>
                            <option value="lugar">2</option>
                            <option value="lugar">3</option>
                            <option value="lugar">4</option>
                            <option value="lugar">5</option>
                            <option value="lugar">6</option>
                            <option value="lugar">7</option>
                            <option value="lugar">8</option>
                            <option value="lugar">9</option>
                        </select>
                        
                        
                    </div>
                    <br>
                    <div class="patente">
                        <label for= "">Patente</label>
                        <input type="text" name="" id="">
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" >
                </form>
            </div>
        </div>
    </body>
</html>