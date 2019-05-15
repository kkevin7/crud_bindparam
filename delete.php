<?php
require_once('EstudiantesModel.php');
require_once('EntityArray.php');
$estudiantesModel = new EstudiantesModel;
if (isset($_GET['id_estudiante'])) {
    $estudiantesModel->delete($_GET['id_estudiante']);
    header('location: index.php');
}
?>