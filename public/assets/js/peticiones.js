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
            $('#modal-blade-body').text('Nombre: '+data.correo.nombre_usu+' Teléfono: '+data.correo.telefono_usu)
        }
    });
    return false;
}

window.addEventListener("load",function(){
    document.getElementById("texto").addEventListener("keyup",function(){
        fetch('/dashboard/pqr/buscador?text=${document.getElementById("texto").value}',{
            method:'get'
        })
         .then(Response=>Response.text())
         .then(html=>{
             document.getElementById("Resultados").innerHTML +=html
         })
    })
})


$(document).ready(function(){
    CKEDITOR.replace("editor1",{
        height:"200px"
    })
    // $( '#editor1' ).ckeditor();
});