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
            $('#modal-blade-body').text(data.correo.num_correo)
            $('#modal-blade-title').text('Correo #'+data.correo.num_correo)
            console.log(data.correo)
        }
    });
    return false;
}