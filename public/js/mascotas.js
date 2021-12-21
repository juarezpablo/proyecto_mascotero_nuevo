$(document).ready(()=>{

     var pepito;
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



        //prueba mil de imagen de muestra cargada
        $("#imagen_cargada").change(()=>{


            var preview =document.querySelector('img');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
            reader.onloadend = function () {
              preview.src = reader.result;
            }

            if (file) {
              reader.readAsDataURL(file);
            } else {
              preview.src = "";
            }

         //   console.log(preview.src);

         });

    });


    /*
    $("#imagen_1").change(()=>{


        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();
        reader.onloadend = function () {
          preview.src = reader.result;
        }

        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.src = "";
        }
        $("#prueba").src=reader.result;
     //   console.log(preview.src);
     });

*/

///SEGMENTO FUNCIONA PERO NO SE UTILIZA
 // get a reference to the file input
 const fileInput = $("#imagen_1");

 // listen for the change event so we can capture the file
 fileInput.change( (e) => {
   // get a reference to the file
   const file = e.target.files[0];

   // encode the file using the FileReader API
   const reader = new FileReader();
   reader.onloadend = () => {
     // use a regex to remove data url part
     const base64String = reader.result
       .replace("data:", "")
       .replace(/^.+,/, "");

     // log to console
     // logs wL2dvYWwgbW9yZ...
    // console.log(base64String);
     pepito = base64String;
   };
   reader.readAsDataURL(file);


});







    /*
    $("#imagen_1").change(pepito());
     function pepito(){
        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();

        reader.onloadend = function () {
          preview.src = reader.result;
        }

        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.src = "";
        }
    };*/



   // $("#imagen_1").change(pepito);
     /*   function (){
            var previa=$("#imagen_previa");
            var imagen_1=$("#imagen_1").files[0];
            var reader  = new FileReader();
            reader.onloadend = function () {
                previa.src = reader.result;
              }

              if (imagen_1) {
                reader.readAsDataURL(imagen_1);
              } else {
                previa.src = "";
              }
            }

            */

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

       /* var file= $("#imagen_1");
        var reader  = new FileReader();
        reader.readAsDataURL(file);
            reader.onloadend = function () {
            var x = reader.result;
            }*/




        var nombre= $("#nombre").val();
        var edad= $("#edad").val();
        var sexo= $("#sexo").val();
        var tipo_mascota= $("#tipo_mascota").val();
        var desparasitado=$("#desparasitado").prop("checked");
        var castrado = $("#castrado").prop("checked");
        var vacunado = $("#vacunado").prop("checked");
        var imagen_1=$("#imagen_prueba").attr("src");
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




         console.log(imagen_1);




        alert(desparasitado);

        alert(castrado);
        alert(vacunado);

      //   console.log(pepi);

        $.ajax({
            url: "mascotas",
            type: "post",
            data: { "nombre": nombre, "tipo_mascota": tipo_mascota , "sexo": sexo , "edad": edad , "desparasitado": desparasitado, "castrado": castrado, "vacunado": vacunado, "observaciones": observaciones, "imagen_1": imagen_1 } ,
            success: function (response){
                console.log(response);
              location.reload();
            } ,
            error: function(){

                location.reload();
            } ,


        });




    });

    ////
    $("#tablatexto").hide();
    var tablita=$("#tablatexto").html();
    var prueba2=$("#prueba").val();
    var prueba3=document.getElementById("prueba").innerHTML;
    $("#boton_crear_tabla").click((evento)=>{
        evento.preventDefault();
        $("#titulo_h1").append("<br><h2>Esto es titulo2</h2><br>");

      //  console.log(tablita);
      //  console.log(prueba3);


    });






});
