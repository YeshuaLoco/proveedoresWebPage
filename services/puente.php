<?php
session_start();
$_SESSION['proUid'] = $_GET['proUid'];
$_SESSION['proNombreCarpeta'] = $_GET['proNombreCarpeta'];
header("Location: ../" . $_SESSION['proNombreCarpeta']);
?>