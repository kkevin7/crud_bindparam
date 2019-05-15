<?php
require_once('EstudiantesModel.php');
$estudiantesModel = new EstudiantesModel;
$estudiantes = $estudiantesModel->read();
//var_dump($estudiantes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
<div class="div">
<button type="submit" onclick="window.location.href='create.php'">Nuevo Registro</button>
</div>
    <table>
    <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Fecha Nacimiento</th>
    <th>Sexo</th>
    <th colspan="2">Acciones</th>
    </tr>
    <?php
    for ($i=0; $i <count($estudiantes) ; $i++) { 
    echo "<tr>
    <td>".$estudiantes[$i]['nombre']."</td>
    <td>".$estudiantes[$i]['apellidos']."</td>
    <td>".$estudiantes[$i]['fecha_nacimiento']."</td>
    <td>".$estudiantes[$i]['sexo']."</td>
    <td><button onclick=\"window.location.href='update.php?id_estudiante=".$estudiantes[$i]['id_estudiante']."'\">Editar</button></td>
    <td><button onclick=\"window.location.href='delete.php?id_estudiante=".$estudiantes[$i]['id_estudiante']."'\">Eliminar</button></td>
    </tr>";
    }
    
    ?>
    </table>
</body>
</html>