$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//Peticion para mostrar ventana Modal
function verPQR(id) {
    console.log(id);
    $.ajax({
        url: '/dashboard/pqr/'+id,
        type: 'GET',
        success: function (data) {
            if(data.correo.clasificacion=="Correo"){
                $("#modal-blade").modal('show');
                $('#modal-blade-title').text('Correo N° '+data.correo.num_reclamo);
            }
            else if(data.correo.clasificacion=="Reclamo"){
                $("#modal-blade").modal('show');
                $('#modal-blade-title').text('Reclamo N° '+data.correo.num_reclamo);
            }
            else if(data.correo.clasificacion=="Queja"){
                $("#modal-blade").modal('show');
                $('#modal-blade-title').text('Queja N° '+data.correo.num_reclamo);
            }
            else if(data.correo.clasificacion=="Sugerencia"){
                $("#modal-blade").modal('show');
                $('#modal-blade-title').text('Sugerencia N° '+data.correo.num_reclamo);
            }
            else{
                $("#modal-blade").modal('show');
                $('#modal-blade-title').text('Felicitación N° '+data.correo.num_reclamo);
            }
            $('.modal-body #nombre').val(data.correo.nom_cli_re);
            $('.modal-body #fecha').val(data.correo.fecha_reclamo);
            $('.modal-body #correo').val(data.correo.correo_cli_re);
            $('.modal-body #telefono').val(data.correo.tel_cli_re);
            $('.modal-body #direccion').val(data.correo.dir_cli_re);
            $('.modal-body #mensaje').val(data.correo.mensaje_reclamo);
          
        }
    });
    return false;
}

var tipo;

$(document).ready(function(){

    // Iniciador de TEXAREA para contestar los correos
    CKEDITOR.replace("editor1",{
        height:"100px"
    });

    // Peticion AJAX para listar la tabla de correos
    switch (window.location.pathname) {
        case '/dashboard/pqr/correos':
            tipo = 'Correo';
            tabla(tipo)
            break;
        case '/dashboard/pqr/reclamos':
            tipo = 'Reclamo';
            tabla(tipo)
            break;
        case '/dashboard/pqr/quejas':
            tipo = 'Queja';
            tabla(tipo)
            break;
        case '/dashboard/pqr/sugerencias':
            tipo = 'Sugerencia';
            tabla(tipo)
            break;
        case '/dashboard/pqr/felicitaciones':
            tipo = 'Felicitaciones';
            tabla(tipo)
            break;
        default:

            break;
    }

});

function tabla(tipo, texto) {

    var html = '';
    if (!texto) {
        texto = 'Todos'
    } 

    $.ajax({
        url: '/dashboard/pqr/'+tipo+'/'+texto,
        type: 'POST',
        data: { tipo:tipo, texto:texto },
        success: function (data) {
             console.log(Object.values(data))
            html = `
                    <div class="table-responsive mb-3">
                        <table class="table table-centered table-hover table-bordered mb-0">
                        <style>
                            .main{
                                white-space: nowrap;
                                width: 200px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }
                        </style>
                            <thead>
                                <tr>
                                    <th colspan="12" class="text-center">
                                    `
                                    if(Object.values(data.correos)[0].clasificacion=="Correo")
                                    {
                                        html +=
                                        `
                                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-envelope-open-text"></i></div>
                                        <span class="header-title mt-2">Correos enviados desde la página web</span>
                                        `
                                    }
                                    else if(Object.values(data.correos)[0].clasificacion=="Reclamo")
                                    {
                                        html +=
                                        `
                                        <div class="d-inline-block icons-sm mr-2"><i class="far fa-angry"></i></div>
                                        <span class="header-title mt-2">Reclamos enviados desde la página web</span>
                                        `
                                    }
                                    else if(Object.values(data.correos)[0].clasificacion=="Queja")
                                    {
                                        html +=
                                        `
                                        <div class="d-inline-block icons-sm mr-2"><i class="far fa-tired"></i></div>
                                        <span class="header-title mt-2">Quejas enviadas desde la página web</span>
                                        `
                                    }
                                    else if(Object.values(data.correos)[0].clasificacion=="Sugerencia")
                                    {
                                        html +=
                                        `
                                        <div class="d-inline-block icons-sm mr-2"><i class="fas fa-ad"></i></div>
                                        <span class="header-title mt-2">Sugerencias enviadas desde la página web</span>
                                        `
                                    }
                                    else 
                                    {
                                        html +=
                                        `
                                        <div class="d-inline-block icons-sm mr-2"><i class="far fa-laugh-wink"></i></div>
                                        <span class="header-title mt-2">Felicitaciones enviadas desde la página web</span>
                                        `
                                    }
                                  
                                   html += `
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Mensaje</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            `
                            Object.values(data.correos).forEach(correo => {
                                //console.log(correo.correo_cli_re);
                                html += `
                                    <tr>
                                        <th scope="row">
                                            <a href="#">${ correo.num_reclamo }</a>
                                        </th>
                                        <td><p class="main">${ correo.nom_cli_re }</p></td>
                                        <td>${ correo.tel_cli_re }</td>
                                        <td><p class="main">${ correo.correo_cli_re }</p></td>
                                        <td><p class="main">${ correo.mensaje_reclamo }</p></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="verPQR(${correo.num_reclamo})" data-toggle="tooltip" data-placement="top" title="Ver Correo">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                `
                            });
                            html += `        
                            </tbody>
                        </table>
                    </div>
                `;
                            
            $('#tabla-correos').html(html);
        }
    });
}

function onKey() {
    var texto = $('#texto').val();
    tabla(this.tipo, texto)
};