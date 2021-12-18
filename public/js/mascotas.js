$(document).ready(()=>{

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        //escondo el formulario de mascotas
    $("#form-ingreso-mascota").hide();


    //BOTON INGRESAR MASCOTA
    $("#ingresoMascota").click(() =>{
        $("#form-ingreso-mascota").show();
         //   $("#tabla_primigenia").hide();
    /*     $("#boton_cargar").on();*/
        $("#tabla_primigenia").css({"opacity":"0.4","pointer-events" : "none"});
      //  $("#tabla_primigenia").find("*").prop('disabled',true);
        $("#ingresoMascota").hide();

    });


     //BOTON CERRAR FORMULARIO
    $("#boton_escape").click((e)=>{
        e.preventDefault();

     /*   $("#boton_cargar").off();*/
        $("#form-ingreso-mascota").hide();
        $("#tabla_primigenia").show();
        $("#tabla_primigenia").css({"opacity":"1","pointer-events" : "auto"});
        $("#ingresoMascota").show();
    });


    //ENVIO DE FORMULARIO
    $("#boton_cargar").click((evento) => {
        evento.preventDefault();


        var nombre= $("#nombre").val();
        var edad= $("#edad").val();
        var sexo= $("#sexo").val();
        var tipo_mascota= $("#tipo_mascota").val();
        var desparasitado=$("#desparasitado").prop("checked");
        var castrado = $("#castrado").prop("checked");
        var vacunado = $("#vacunado").prop("checked");
        var observaciones= $("#observaciones").val();

        if( desparasitado == true){
            desparasitado ="si";
        }
        else{
            desparasitado="no";
        };
        if( castrado == true){
           var castrado ="si";
         }
         else{
           var  castrado = "no";
         };

         if( vacunado == true){
           var  vacunado ="si";
         }
         else{
           var  vacunado = "no";
         };


        alert(desparasitado);

        alert(castrado);
        alert(vacunado);


        $.ajax({
            url: "mascotas",
            type: "post",
            data: { "nombre": nombre, "tipo_mascota": tipo_mascota , "sexo": sexo , "edad": edad , "desparasitado": desparasitado, "castrado": castrado, "vacunado": vacunado, "observaciones": observaciones} ,
            success: function (response){
                console.log(response);
            } ,
            error: function(){
                alert("error");
            } ,


        });


    });










});
