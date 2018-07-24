<!-- Modal Nuevo Proveedor -->
<div class="modal fade" id="modalProveedor" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nuevo Proveedor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>      
      <form id="formularioNuevoProveedor" name="formularioNuevoProveedor" method="post" enctype="multipart/form-data" action="classes/functions.php" class="form-horizontal">
      <div class="modal-body">        
          <div class="form-group">
            <label class="control-label col-sm-12" for="proNombre">Nombre:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proNombre" name="proNombre" placeholder="Ingresa Nombre">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proNombreCarpeta">Nombre Dominio:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proNombreCarpeta" name="proNombreCarpeta" placeholder="Ingresa Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="proDescripcion">Descripción:</label>
            <div class="col-sm-12">
              <textarea class="form-control" rows="5" id="proDescripcion" name="proDescripcion"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proWhatsapp">WhatsApp:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proWhatsapp" name="proWhatsapp" placeholder="Ingresa WhatsApp">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proMessenger">Messenger:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proMessenger" name="proMessenger" placeholder="Ingresa Messenger">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proEmail">Email:</label>
            <div class="col-sm-12">
              <input type="email" class="form-control" id="proEmail" name="proEmail" placeholder="Ingresa Email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proHorarios">Horarios:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proHorarios" name="proHorarios" placeholder="Ingresa Horarios">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proTelefonos">Teléfonos:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proTelefonos" name="proTelefonos" placeholder="Ingresa Teléfonos">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proColorFondo">Color Fondo:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proColorFondo" name="proColorFondo" placeholder="Ingresa Color Perfil">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" for="proColorLetras">Color Letras:</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proColorLetras" name="proColorLetras" placeholder="Ingresa Color Perfil">
            </div>
          </div>
          <div class="form-group">
            <label for="proLogo">Imagen Logo</label>
            <input type="file" class="form-control-file" id="proLogo" name="proLogo" aria-describedby="fileHelp">
            <!--<small id="fileHelp" class="form-text text-muted">Logo Perfil.</small>-->
          </div>
          <div class="form-group">
            <label for="proPortada">Imagen Portada</label>
            <input type="file" class="form-control-file" id="proPortada" name="proPortada" aria-describedby="fileHelp">
            <!--<small id="fileHelp" class="form-text text-muted">Logo Perfil.</small>-->
          </div>
          <!--
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-12">
              <button type="submit" class="btn btn-default">Guardar</button>
            </div>
          </div>
           -->        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="modalProveedorCategoris" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Proveedore - Categorias</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <form>
        <div class="modal-body" id="checkboxCategorias">                             
        </div>
        <div class="modal-footer">
          <!--<button type="submit" class="btn btn-default">Guardar</button>-->
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>

  </div>
</div>