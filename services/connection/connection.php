<?php
$host = "localhost";
$db = "db_proveedores";
$user = "root";
$password = "";
/*
$host = "localhost";
$db = "id4454297_db_prooveedores";
$user = "id4454297_yecid";
$password = "sample";
*/
$con = mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>