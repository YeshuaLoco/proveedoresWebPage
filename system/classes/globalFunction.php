<?php
$tipo = $_POST['tipo'];


switch ($tipo) {
	case 'getCategoriasPorProveedor':
		require 'class.functions.php';
		$proUid = $_POST['proUid'];
		$proveedoresClass  = new proveedoresClass();
		$arrayCategorias = array();
		$arrayCategorias = $proveedoresClass->getCategoriasPorProveedor($proUid);
		$respuesta = '';
		for ($i=0; $i < count($arrayCategorias); $i++) { 
			$checked = '';
			if ($arrayCategorias[$i]['PC_ESTADO'] == 'ACTIVO') {
				$checked = 'checked';
			}
			$respuesta .= '<div class="checkbox"><label><input type="checkbox" pcUid="' . $arrayCategorias[$i]['PC_UID'] . '" proUid="' . $arrayCategorias[$i]['PRO_UID'] . '"  value="' . $arrayCategorias[$i]['CAT_UID'] . '" ' . $checked . ' onclick="categoriaProveedorAgregarEliminar(this)">' . utf8_encode($arrayCategorias[$i]['CAT_NOMBRE']) . '</label></div> ';
		}
		
		echo $respuesta;
		break;

    case 'agregarCategoriasPorProveedor':
		require 'class.functions.php';
		$pcUid = $_POST['pcUid'];
		$proUid = $_POST['proUid'];
		$catUid = $_POST['catUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->addCategoriasPorProveedor($pcUid,$proUid,$catUid);				
		echo $respuesta;
		break;

	case 'eliminarCategoriasPorProveedor':
		require 'class.functions.php';
		$pcUid = $_POST['pcUid'];
		$proUid = $_POST['proUid'];
		$catUid = $_POST['catUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeCategoriasPorProveedor($pcUid,$proUid,$catUid);				
		echo $respuesta;
		break;
	
	default:
		# code...
		break;
}

?>