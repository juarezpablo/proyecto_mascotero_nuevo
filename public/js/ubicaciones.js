var barrio = document.getElementById('barrio');
var localidad = document.getElementById('localidad');
var idUbicacionInput = document.getElementById('ubicacion');
const idUbicacionCABA = 63;
function insertBefore(nodoNuevo, nodoExistente) {
    nodoExistente.parentNode.insertBefore(nodoNuevo, nodoExistente.nextSibling);
}

function getDiferentesLocalidades(resp){
aux = {};
for(i=0;i<resp.length;i++){
    aux[resp[i].localidad] = resp[i].id_ubicacion;
    }
return aux;
}

function inicializarUbicacion(){
    barrio.disabled = true;
    $( "#localidad" ).change(function() {
        idUbicacionInput.value = localidad.value;
        if(localidad.value!=idUbicacionCABA){
            barrio.disabled = true;
            barrio.value = '';
        }
        else
            barrio.disabled = false;
    });

    $( "#barrio" ).change(function() {
        idUbicacionInput.value = barrio.value;
    });

}

function asyncLocalidades(){
    $(document).ready(()=>{
        $.ajax({
            url: 'api/ubicaciones/localidades',
            type: 'get',
            success: function(response){
                aux = getDiferentesLocalidades(response);
                for(i=0;i<Object.keys(aux).length;i++){
                    let option = document.createElement('option');
                    option.value = Object.values(aux)[i];
                    // atr = document.createAttribute('id_ubicacion')
                    // atr.value = Object.values(aux)[i];
                    // option.setAttributeNode(atr);
                    option.textContent = Object.keys(aux)[i].toUpperCase() ;
                    localidad.insertBefore(option, localidad.firstElementChild.nextSibling);
                }
            },
            error:  function( jqXHR, textStatus, errorThrown ) {

                if (jqXHR.status === 0) {

                  alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                  alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                  alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                  alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                  alert('Time out error.');

                } else if (textStatus === 'abort') {

                  alert('Ajax request aborted.');

                } else {

                  alert('Uncaught Error: ' + jqXHR.responseText);

                }

              }
        })
    });
}

function asyncBarrios(){
    $(document).ready(()=>{
        $.ajax({
            url: 'api/ubicaciones/barrios',
            type: 'get',
            success: function(response){
                for(i=0;i<response.length;i++){
                    if(response[i].barrio!==null){
                        let option = document.createElement('option');
                        option.value = response[i].id_ubicacion;
                        // atr = document.createAttribute('id_ubicacion');
                        // atr.value = response[i].id_ubicacion;
                        // option.setAttributeNode(atr);
                        option.textContent = response[i].barrio.toUpperCase();
                        barrio.insertBefore(option, barrio.firstElementChild.nextSibling);
                    }
                }
            },
            error:  function( jqXHR, textStatus, errorThrown ) {

                if (jqXHR.status === 0) {

                  alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                  alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                  alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                  alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                  alert('Time out error.');

                } else if (textStatus === 'abort') {

                  alert('Ajax request aborted.');

                } else {

                  alert('Uncaught Error: ' + jqXHR.responseText);

                }

              }
        })
    });
}

asyncLocalidades();
asyncBarrios();
inicializarUbicacion();






