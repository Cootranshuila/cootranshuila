<style type="text/css">
  .estilo {
        height:75px;
     }

    .estilo2 {
        height:45px;
     }
  </style>
<div class="modal fade  " id="modal-blade" tabindex="-1" role="dialog" aria-labelledby="modal-blade-title" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header estilo2">
                <h5 class="modal-title mt-0" id="modal-blade-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body " id="modal-blade-body">
                <div class="row estilo">
                    <div class="form-group col-9">
                        <label for="nombre" class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre"  required maxlength="45">
                    </div>
                    <div class="form-group col-3">
                        <label for="nombre" class="control-label">Fecha:</label>
                        <input type="text" class="form-control" id="fecha"  required maxlength="45">
                    </div>
                </div>  
                <div class="row">
                    <div class="form-group col-5">
                        <label for="nombre" class="control-label">Correo:</label>
                        <input type="text" class="form-control" id="correo"  required maxlength="45">
                    </div>
                    <div class="form-group col-3">
                        <label for="nombre" class="control-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono"  required maxlength="45">
                    </div>
                    <div class="form-group col-4">
                        <label for="nombre" class="control-label">Dirección:</label>
                        <input type="text" class="form-control" id="direccion"  required maxlength="45">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="nombre" class="control-label">Mensaje:</label>
                    <textarea type="text" class="form-control" id="mensaje" height="20px" ></textarea>
                </div>
                <h5 class="text-center">Respuesta</h5>
                <textarea name="editor1" id="editor1"></textarea>
            </div>
            
            
        </div>
    </div>
</div>

