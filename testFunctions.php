<?php
require 'services/class.functions.php';
//*****************************************************
// CATEGORIAS
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$arrayCategories = array();
$arrayCategories = $proveedoresClass->getCategories();
echo("Categorias") . "<br>";
var_dump($arrayCategories);
//******************************************************
echo "<br>";
//*****************************************************
// PROVEEDORES
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$arrayProveedores = array();
$arrayProveedores = $proveedoresClass->getProveedores();
//echo("Proveedores") . "<br>";
//var_dump($arrayProveedores);
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
//*****************************************************
// PROVEEDORES - GALERIA
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayProveedoresGaleria = array();
$arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria($idProveedor);
echo("Proveedor - Galeria") . "<br>";
var_dump($arrayProveedoresGaleria);
//*****************************************************
// PROVEEDORES - PROMOCIONES
//*****************************************************
$proveedoresClass  = new proveedoresClass();
$idProveedor = 2;
$arrayProveedoresPromociones = array();
$arrayProveedoresPromociones = $proveedoresClass->getProveedoresPromociones($idProveedor);
echo("Proveedor - Promociones") . "<br>";
var_dump($arrayProveedoresPromociones);
//******************************************************
?>