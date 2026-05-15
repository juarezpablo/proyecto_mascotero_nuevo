var botonRegistrar = document.getElementById('botonRegistrar');
var contrasena = document.getElementById('contrasena');
var contrasena2 = document.getElementById('contrasena2');

function validarRegistro(){

    $( "#contrasena" ).keyup(function() {
        if(contrasena.value!=contrasena2.value || contrasena.value.length<4 || contrasena.value.length>12){
            botonRegistrar.disabled = true;
            botonRegistrar.style.backgroundColor = '#ccc';
        }
        else{
            botonRegistrar.disabled = false;
            botonRegistrar.style.backgroundColor = '#e28b9c';
        }
    });

    $( "#contrasena2" ).keyup(function() {
        if(contrasena.value!=contrasena2.value || contrasena2.value.length<4 || contrasena2.value.length>12){
            botonRegistrar.disabled = true;
            botonRegistrar.style.backgroundColor = '#ccc';
        }
        else{
            botonRegistrar.disabled = false;
            botonRegistrar.style.backgroundColor = '#e28b9c';
        }
    });
}
function inicializar(){
    botonRegistrar.disabled = true;
    botonRegistrar.style.backgroundColor = '#ccc';
}

inicializar();
validarRegistro();
