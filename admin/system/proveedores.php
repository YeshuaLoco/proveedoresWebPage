<?php
//*****************************************************
// PROVEEDORES
//*****************************************************
require 'classes/class.functions.php';
$proveedoresClass  = new proveedoresClass();
$arrayProveedores = array();
$arrayProveedores = $proveedoresClass->getProveedores();
//******************************************************
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('include/header.php');
?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
  include('include/menu.php');
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a data-toggle="modal" data-target="#modalProveedor">
              <i class="fa fa-user-plus"></i> Nuevo Proveedor</div>  
          </a>          
        <div class="card-header">
          <i class="fa fa-users"></i> Proveedores</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Logo</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th></th>
                  <th></th>                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Logo</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                for ($i=0; $i < count($arrayProveedores) ; $i++) {                
                ?>
                <tr>
                  <td><img width="50px" height="50px" src="<?php echo $arrayProveedores[$i]['PRO_IMAGEN_LOGO']; ?>"></td>
                  <td><?php echo $arrayProveedores[$i]['PRO_NOMBRE']; ?></td>
                  <td><?php echo ucfirst($arrayProveedores[$i]['PRO_ESTADO']); ?></td>
                  <td><a href="">Modificar</a></td>
                  <td><a href="">Eliminar</a></td>                  
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php
    include('include/footer.php');
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
    <?php
    include('include/javascript.php');
    ?>  
    <?php
    include('include/modals.php');
    ?>     
  </div>
</body>

</html>
