$("#boton_relacion").click(() => {
    window.open("{{ route('formularios/relacion?usuario={{$formulario->id_usuario}}&mascota={{$formulario->id_mascota}}')}}",'Datos Adoptante y Mascota','width=800, height=600');
});