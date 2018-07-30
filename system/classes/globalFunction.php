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

	case 'getIconosPorProveedor':
		require 'class.functions.php';
		$proUid = $_POST['proUid'];
		$proveedoresClass  = new proveedoresClass();
		$arrayIconos = array();
		$arrayIconos = $proveedoresClass->getIconosPorProveedor($proUid);
		$respuesta = '';
		for ($i=0; $i < count($arrayIconos); $i++) { 
			$checked = '';
			if ($arrayIconos[$i]['ICO_ESTADO'] == 'ACTIVO') {
				$checked = 'checked';
			}
			$respuesta .= '<div class="checkbox"><label><input type="checkbox" picUid="' . $arrayIconos[$i]['PIC_UID'] . '" proUid="' . $arrayIconos[$i]['PRO_UID'] . '"  value="' . $arrayIconos[$i]['ICO_UID'] . '" ' . $checked . ' onclick="iconoProveedorAgregarEliminar(this)">&nbsp<i class="' . utf8_encode($arrayIconos[$i]['ICO_CLASS']) . '">&nbsp' . str_replace('fa fa-', '', utf8_encode($arrayIconos[$i]['ICO_CLASS'])) . '</i></label></div> ';
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

    case 'agregarIconosPorProveedor':
		require 'class.functions.php';
		$picUid = $_POST['picUid'];
		$proUid = $_POST['proUid'];
		$icoUid = $_POST['icoUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->addIconosPorProveedor($picUid,$proUid,$icoUid);				
		echo $respuesta;
		break;

	case 'eliminarIconosPorProveedor':
		require 'class.functions.php';
		$picUid = $_POST['picUid'];
		$proUid = $_POST['proUid'];
		$icoUid = $_POST['icoUid'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeIconosPorProveedor($picUid,$proUid,$icoUid);				
		echo $respuesta;
		break;		

	case 'eliminarProveedor':
		require 'class.functions.php';		
		$proUid = $_POST['proUid'];
		$proNombre = $_POST['proNombre'];
		$proveedoresClass  = new proveedoresClass();		
		$respuesta = '';
		$respuesta = $proveedoresClass->removeProveedor($proUid,$proNombre);				
		echo $respuesta;
		break;
	
	default:
		# code...
		break;
}

?>