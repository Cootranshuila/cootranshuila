$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function verPQR(id) {
    $.ajax({
        url: '/dashboard/pqr/'+id,
        type: 'GET',
        success: function (data) {
            $("#modal-blade").modal('show')
            $('#modal-blade-title').text('Correo N° '+data.correo.num_correo)
            //$('#modal-blade-body').text('Nombre: '+data.correo.nombre_usu+' Teléfono: '+data.correo.telefono_usu)
            $('.modal-body #nombre').val(data.correo.nombre_usu)
            $('.modal-body #telefono').val(data.correo.telefono_usu)
            $('.modal-body #correo').val(data.correo.correo_usu)
            $('.modal-body #mensaje').val(data.correo.mensaje_usu)
            $('.modal-body #fecha').val(data.correo.fecha_correo)
            console.log(data.correo)
        }
    });
    return false;
}