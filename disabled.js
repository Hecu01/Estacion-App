$estacionados = document.getElementById('cant_estacionados').addEventListener('change',function(){
    var boton = document.getElementById('enviar');
var oculto = document.createElement('input');
oculto.name= this.name;
oculto.value = this.value;

document.getElementById('formular').appendChild(oculto);

for(i = 0; i< 5; i++){
$estacionados++;
if($estacionados >= 5){
    this.disabled = true;
}

}
})