<?php
$proNombre = $_POST["proNombre"];
$proDescripcion = $_POST["proDescripcion"];
$proWhatsapp = $_POST["proWhatsapp"];
$proMessenger = $_POST["proMessenger"];
$proEmail = $_POST["proEmail"];
$proHorarios = $_POST["proHorarios"];
$proTelefonos = $_POST["proTelefonos"];

$query = "   INSERT INTO proveedores
			 (
			     PRO_UID, 
		         PRO_NOMBRE, 
	             PRO_DESCRIPCION, 
	             PRO_IMAGEN_LOGO, 
	             PRO_IMAGEN_PORTADA, 
	             PRO_WHATSAPP, 
	             PRO_MESSENGER, 
	             PRO_EMAIL, 
	             PRO_HORARIOS, 
	             PRO_GEOLOCALIZACION, 
	             PRO_RANKING, 
	             PRO_TELEFONOS, 
	             PRO_ESTADO)
			 VALUES(
			     NULL, 
	             '$proNombre', 
	             '$proDescripcion', 
	             '', 
	             '', 
	             '$proWhatsapp', 
	             '$proMessenger', 
	             '$proEmail', 
	             '$proHorarios', 
	             '', 
	             0, 
	             '$proTelefonos', 
	             'ACTIVO');
	             ";
include  'connection/connection.php';
$result  = $con->query($query);
$last_id = $con->insert_id;
$target_dir = "../uploads/logos/";
$target_file = $target_dir . basename($_FILES["proLogo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file_logo = $target_dir . $last_id . '.' . $imageFileType;
move_uploaded_file($_FILES["proLogo"]["tmp_name"], $target_file_logo);

$target_dir = "../uploads/portadas/";
$target_file = $target_dir . basename($_FILES["proPortada"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file_portada = $target_dir . $last_id . '.' . $imageFileType;
move_uploaded_file($_FILES["proPortada"]["tmp_name"], $target_file_portada);

$target_file_logo = str_replace('../', '', $target_file_logo);
$target_file_portada = str_replace('../', '', $target_file_portada);

$query = "UPDATE proveedores
		  SET PRO_IMAGEN_LOGO ='$target_file_logo', 
		      PRO_IMAGEN_PORTADA ='$target_file_portada'
		  WHERE PRO_UID = " . $last_id;
$result  = $con->query($query);
header("Location: ../proveedores.php");
?>
