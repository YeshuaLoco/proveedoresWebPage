<?php
require 'classes/class.functions.php';
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
echo("Proveedores") . "<br>";
var_dump($arrayProveedores);
//******************************************************

?>