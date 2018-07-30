<?php
require 'services/class.functions.php';
//*****************************************************
// CATEGORIAS
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$arrayCategories = array();
$arrayCategories = $proveedoresClass->getCategories();
//echo("Categorias") . "<br>";
//var_dump($arrayCategories);
//******************************************************
echo "<br>";
//*****************************************************
// PROVEEDORES
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$arrayProveedores = array();
$arrayProveedores = $proveedoresClass->getProveedores(2);
/*echo("Proveedores") . "<br>";
var_dump($arrayProveedores);*/
//******************************************************
echo "<br>";
//*****************************************************
// PROVEEDORES - CATEGORIAS
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayProveedoresCategorias = array();
$arrayProveedoresCategorias = $proveedoresClass->getProveedoresCategorias($idProveedor);
//echo("Proveedore - Categoria") . "<br>";
//var_dump($arrayProveedoresCategorias);
echo "<br>";
//*****************************************************
// PROVEEDORES - GALERIA
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayProveedoresGaleria = array();
$arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria($idProveedor);
//echo("Proveedor - Galeria") . "<br>";
//var_dump($arrayProveedoresGaleria);
echo "<br>";
//*****************************************************
// PROVEEDORES - PROMOCIONES
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayProveedoresPromociones = array();
$arrayProveedoresPromociones = $proveedoresClass->getProveedoresPromociones($idProveedor);
//echo("Proveedor - Promociones") . "<br>";
//var_dump($arrayProveedoresPromociones);
echo "<br>";
//*****************************************************
// PROVEEDORES - ppor categoria
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$uidCategoria = 6;
$arrayProveedoresPorCategoria = array();
$arrayProveedoresPorCategoria = $proveedoresClass->getProveedoresPorCategoria($uidCategoria);
//echo("Proveedor Por Categoria") . "<br>";
//var_dump($arrayProveedoresPorCategoria);
//*****************************************************
// PROMOCIONES
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayPromociones = array();
$arrayPromociones = $proveedoresClass->getPromociones($idProveedor);
//echo("PROMOCIONES") . "<br>";
//var_dump($arrayPromociones);
echo "<br>";
//*****************************************************
// ICONOS
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayIconos = array();
$arrayIconos = $proveedoresClass->getIconosPorProveedor($idProveedor);
//echo("ICONOS") . "<br>";
var_dump($arrayIconos);
echo "<br>";
//*****************************************************
// BUSQUEDA
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$palabraClave = '';
$ciudad = 'SCZ';
$arrayBusqueda = array();
$arrayBusqueda = $proveedoresClass->getBusqueda($palabraClave,$ciudad);
echo("BUSQUEDA") . "<br>";
var_dump($arrayBusqueda);
echo "<br>";
//*****************************************************
// PROMOCION POR ID
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$promoUid = 1;
$arrayPromocionPorId = array();
$arrayPromocionPorId = $proveedoresClass->getPromocionPorID($promoUid);
echo("PROMOCION POR ID") . "<br>";
var_dump($arrayPromocionPorId);
echo "<br>";






?>