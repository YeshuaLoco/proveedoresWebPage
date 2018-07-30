<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>

    <script src="js/colorpicker/dist/js/bootstrap-colorpicker.js"></script>

    <script>
    $(function () {
      $('#proColorFondo').colorpicker();
    });

    $(function () {
      $('#proColorLetras').colorpicker();
    });
    </script>

    <script type="text/javascript">
        /*
        function guardarFormulario(){
            $.ajax({
            type: 'post',
            url: 'classes/functions.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });
        }*/

        /*$(function () {

        $('#formularioNuevoProveedor').on('submit', function (e) {
          alert("hola");
          e.preventDefault();
          var file_data = $('#formularioNuevoProveedor').prop('files')[0];   
          var form_data = new FormData();
          form_data.append('file', file_data);

          $.ajax({
            type: 'post',
            url: 'classes/functions.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
      */

      function getCategorias(proUid){
        //alert(proUid);
        var tipo = 'getCategoriasPorProveedor';
        $.ajax({
            type: 'post',
            url: "classes/globalFunction.php",             
            data: 'tipo='+tipo + '&proUid=' + proUid,  
            success: function(data) {
              //alert(data);
              $('#checkboxCategorias').html(data);
            //$("#result").hide().html(output).slideDown();           
            }
        });

      }

      function getIconos(proUid){
        //alert(proUid);
        var tipo = 'getIconosPorProveedor';
        $.ajax({
            type: 'post',
            url: "classes/globalFunction.php",             
            data: 'tipo='+tipo + '&proUid=' + proUid,  
            success: function(data) {
              //alert(data);
              $('#checkboxIconos').html(data);
            //$("#result").hide().html(output).slideDown();           
            }
        });

      }

      function categoriaProveedorAgregarEliminar(element){        
        var pcUid = element.getAttribute("pcUid");
        var proUid = element.getAttribute("proUid");
        var catUid = element.getAttribute("value");
        var tipo = '';
        if (element.checked) {
          tipo = 'agregarCategoriasPorProveedor';
        } else {
          tipo = 'eliminarCategoriasPorProveedor';
        }

        $.ajax({
            type: 'post',
            url: "classes/globalFunction.php",             
            data: 'tipo=' + tipo + '&pcUid=' + pcUid + '&proUid=' + proUid + '&catUid=' + catUid,
            async: true,
            success: function(data) {
              getCategorias(proUid);
            }
        });

      }

      function iconoProveedorAgregarEliminar(element){        
        var picUid = element.getAttribute("picUid");
        var proUid = element.getAttribute("proUid");
        var icoUid = element.getAttribute("value");
        var tipo = '';
        if (element.checked) {
          tipo = 'agregarIconosPorProveedor';
        } else {
          tipo = 'eliminarIconosPorProveedor';
        }

        $.ajax({
            type: 'post',
            url: "classes/globalFunction.php",             
            data: 'tipo=' + tipo + '&picUid=' + picUid + '&proUid=' + proUid + '&icoUid=' + icoUid,
            async: true,
            success: function(data) {
              getIconos(proUid);
            }
        });

      }      

      function openModalDelete(proUid,proNombre){
        document.getElementById('hideUidPro').value = proUid;
        document.getElementById('hideNombrePro').value = proNombre;        
        $('#modalDeleteConfirmation').modal('show');
      }

      function eliminarProveedor(){
        var proUid = document.getElementById('hideUidPro').value;
        var proNombre = document.getElementById('hideNombrePro').value;
        tipo = 'eliminarProveedor';        
        $.ajax({
            type: 'post',
            url: "classes/globalFunction.php",             
            data: 'tipo=' + tipo + '&proUid=' + proUid + '&proNombre=' + proNombre,
            async: true,
            success: function(data) {
              location.reload();
            }
        });
      }
    </script>
