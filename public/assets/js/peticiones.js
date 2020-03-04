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

tinymce.init({
    selector: 'textarea#elm1',
});

// $(document).ready(function() {
//     $("#elm1").length && tinymce.init({
//         selector: "textarea#elm1",
//         height: 300,
//         plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
//         toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
//         style_formats: [{
//             title: "Bold text",
//             inline: "b"
//         }, {
//             title: "Red text",
//             inline: "span",
//             styles: {
//                 color: "#ff0000"
//             }
//         }, {
//             title: "Red header",
//             block: "h1",
//             styles: {
//                 color: "#ff0000"
//             }
//         }, {
//             title: "Example 1",
//             inline: "span",
//             classes: "example1"
//         }, {
//             title: "Example 2",
//             inline: "span",
//             classes: "example2"
//         }, {
//             title: "Table styles"
//         }, {
//             title: "Table row 1",
//             selector: "tr",
//             classes: "tablerow1"
//         }]
//     })
// });
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
