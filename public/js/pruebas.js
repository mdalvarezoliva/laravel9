/* $elem = document.getElementById('btnGuardar');
console.log($elem['input']); */

/* $('#btnGuardar').click(){
    console.log('d');
}; */

var myModal = new bootstrap.Modal(document.getElementById('myModal'));


    
$('#formulario').submit(function (e) {
    e.preventDefault();
    $('#formulario').submit;
    myModal.show();
});

$('#btnAceptar').click(function (e) {
    $('#formulario').submit();
    myModal.hide();
    
});

/*     if ($("input[name='action']").val() == 'alta'){
        contenido = "¿Esta seguro de dar de Alta el Registro?";
        texto = 'Registro AGREGADO Exitosamente!';
    } else if ($("input[name='action']").val() == 'modificar'){
        contenido = "¿Esta seguro de Modificar el Registro?";
        texto = 'Registro MODIFICADO Exitosamente!';
    } */ 

  /*   enviar_datos_con_ajax(window.location.pathname, 'Mensaje del Sistema', contenido, parametros, function () {
        Swal.fire({
            title: 'Mensaje del Sistema',
            text: texto,
            icon: 'success',
            timer: 2000,
        }).then((result) =>{
            location.href = '{{ listado_url }}';
        });
    }); */

/* function enviar_datos_con_ajax(url, title, content, parameters, callback) {
    $.confirm({
        theme: 'material',
        title: title,
        type: 'blue',
        icon: 'bi bi-question-circle-fill',
        content: content,
        columnClass: 'small',
        typeAnimated: true,
        cancelButtonClass: 'btn-primary',
        draggable: true,
        dragWindowBorder: false,
        buttons: {
            info: {
                text: "<i class='bi bi-check-circle'></i>&nbsp;Si",
                btnClass: 'btn-primary',
                action: function () {
                    $.ajax({
                        url: url, //window.location.pathname
                        type: 'POST',
                        data: parameters,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                    }).done(function (data) {
                        if (!data.hasOwnProperty('error')) {
                            callback();
                            return false;
                        }
                        mensaje_error(data.error);
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        alert(textStatus + ': ' + errorThrown);
                    }).always(function (data) {

                    });
                }
            },
            danger: {
                text: "<i class='bi bi-x-circle'></i>&nbsp;No",
                btnClass: 'btn-red',
                action: function () {

                }
            },
        }
    })
} */