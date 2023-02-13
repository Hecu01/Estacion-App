

function habilitar() {

   fecha = document.getElementById('fecha').value;
   ciudad = document.getElementById('ciudad').value;
   lugar = document.getElementById('direccion').value;
   autos = document.getElementById('tipo').value;
    modelo = document.getElementById('modelo').value;
    patente = document.getElementById('patente').value;
    
    val = 0;

    if(fecha == ""){
        val++;
    }
    if(ciudad == ""){
        val++;
    }
    if(lugar == ""){
        val++;
    }
    if(autos == ""){
        val++;
    }
    if(modelo == ""){
        val++;
    }
    if(patente == ""){
        val++;
    }

    if(val == 0){
        document.getElementById("enviar").disabled = true;
    }else{
        document.getElementById("enviar").disabled  = false;
    }

    document.getElementbyId('fecha').addEventListener("keyup",habilitar);
    document.getElementbyId('ciudad').addEventListener("keyup",habilitar);
    document.getElementbyId('direccion').addEventListener("keyup",habilitar);
    document.getElementbyId('tipo').addEventListener("keyup",habilitar);
    document.getElementbyId('modelo').addEventListener("keyup",habilitar);
    document.getElementbyId('patente').addEventListener("keyup",habilitar);
    document.getElementbyId('enviar').addEventListener("change", () =>{
        alert("Formulario completado");
    });
}
