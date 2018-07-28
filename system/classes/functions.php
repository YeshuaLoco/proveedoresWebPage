<?php

$proNombre = $_POST["proNombre"];
$proDescripcion = $_POST["proDescripcion"];
$proWhatsapp = $_POST["proWhatsapp"];
$proMessenger = $_POST["proMessenger"];
$proEmail = $_POST["proEmail"];
$proHorarios = $_POST["proHorarios"];
$proTelefonos = $_POST["proTelefonos"];
$proColorFondo = $_POST["proColorFondo"];
$proColorLetras = $_POST["proColorLetras"];
$proNombreCarpeta = $_POST["proNombreCarpeta"];
$proTags = $_POST["proTags"];


if (isset($_POST["proDeptoLpz"])) {
    $proDeptoLpz = $_POST["proDeptoLpz"];
} else {
	$proDeptoLpz = '';
}
if (isset($_POST["proDeptoTri"])) {
    $proDeptoTri = $_POST["proDeptoTri"];
} else {
	$proDeptoTri = '';
}
if (isset($_POST["proDeptoSuc"])) {
    $proDeptoSuc = $_POST["proDeptoSuc"];
} else {
	$proDeptoSuc = '';
}
if (isset($_POST["proDeptoCoc"])) {
    $proDeptoCoc = $_POST["proDeptoCoc"];
} else {
	$proDeptoCoc = '';
}
if (isset($_POST["proDeptoOru"])) {
    $proDeptoOru = $_POST["proDeptoOru"];
} else {
	$proDeptoOru = '';
}
if (isset($_POST["proDeptoCob"])) {
    $proDeptoCob = $_POST["proDeptoCob"];
} else {
	$proDeptoCob = '';
}
if (isset($_POST["proDeptoPot"])) {
    $proDeptoPot = $_POST["proDeptoPot"];
} else {
	$proDeptoPot = '';
}
if (isset($_POST["proDeptoScz"])) {
    $proDeptoScz = $_POST["proDeptoScz"];
} else {
	$proDeptoScz = '';
}
if (isset($_POST["proDeptoTar"])) {
	$proDeptoTar = $_POST["proDeptoTar"];
} else {
	$proDeptoTar = '';
}

    $query = "   INSERT INTO proveedores
			 (
			     PRO_UID, 
		         PRO_NOMBRE,
		         PRO_NOMBRE_CARPETA,
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
                 PRO_COLOR_FONDO,
                 PRO_COLOR_LETRAS,
                 PRO_FILTRO,
                 PRO_DEPTO_LPZ,
                 PRO_DEPTO_TRI,
                 PRO_DEPTO_SUC,
                 PRO_DEPTO_COC,
                 PRO_DEPTO_ORU,
                 PRO_DEPTO_COB,
                 PRO_DEPTO_POT,
                 PRO_DEPTO_SCZ,
                 PRO_DEPTO_TAR,
	             PRO_ESTADO)
			 VALUES(
			     NULL, 
	             '$proNombre',
	             '$proNombreCarpeta',
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
	             '$proColorFondo',
	             '$proColorLetras',
	             '$proTags',
	             '$proDeptoLpz',
				 '$proDeptoTri',
				 '$proDeptoSuc',
				 '$proDeptoCoc',
				 '$proDeptoOru',
				 '$proDeptoCob',
				 '$proDeptoPot',
				 '$proDeptoScz',
				 '$proDeptoTar',
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
if (!file_exists('../../' . $proNombreCarpeta)) {
    mkdir('../../' . $proNombreCarpeta, 0777, true);
}
// Crea Carpeta Empresa
$myfile = fopen("../../" . $proNombreCarpeta . "/index.php", "w") or die("Unable to open file!");
$txt = '<?php session_start(); $_SESSION["proUid"] = ' . $last_id . '; include("../services/empresaPerfil.php");?>';
fwrite($myfile, $txt);
fclose($myfile);

header("Location: ../proveedores.php");
?>
