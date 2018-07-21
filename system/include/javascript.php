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
    </script>
