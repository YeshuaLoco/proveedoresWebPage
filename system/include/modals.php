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

          <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoLpz" name="proDeptoLpz" value="YES">La Paz</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoTri" name="proDeptoTri" value="YES">Trinidad</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoSuc" name="proDeptoSuc" value="YES">Sucre</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoCoc" name="proDeptoCoc" value="YES">Cochabamba</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoOru" name="proDeptoOru" value="YES">Oruro</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoCob" name="proDeptoCob" value="YES">Cobija</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoPot" name="proDeptoPot" value="YES">Potosi</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoScz" name="proDeptoScz" value="YES">Santa Cruz</label>
            <label class="checkbox-inline"><input type="checkbox" id="proDeptoTar" name="proDeptoTar" value="YES">Tarija</label>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-12" for="proTags">Tags</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="proTags" name="proTags" placeholder="Ingresa Tags">
            </div>
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

<!-- Modal -->
<div id="modalIcons" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Iconos</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <form>
        <div class="modal-body" id="checkboxIconos">                             
        </div>
        <div class="modal-footer">
          <!--<button type="submit" class="btn btn-default">Guardar</button>-->
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDeleteConfirmation" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Alerta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
        <input style="display: none;" type="text" id="hideUidPro" name="hideUidPro" value="">
        <input style="display: none;" type="text" id="hideNombrePro" name="hideNombrePro" value="">        
        <p>Eliminar empresa?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="eliminarProveedor()">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>