$(document).ready(()=>{




$("#boton_relacion").click(() => {

 window.open("formularios/relacion?usuario={{$formulario->id_usuario}}&mascota={{$formulario->id_mascota}}",blank);
 alert("$direccion");
 alert("$ur")


});






});

