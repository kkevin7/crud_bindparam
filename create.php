<?php
require_once('EstudiantesModel.php');
require_once('EntityArray.php');
$estudiantesModel = new EstudiantesModel;
if (isset($_POST['btn_enviar'])) {
    $arrglo = EntityArray::estudiantesArray(null, $_POST['nombre'],$_POST['apellidos'],
    $_POST['fecha_nacimiento'],$_POST['sexo']);
    //var_dump($arrglo);
    $estudiantesModel->create($arrglo);
    header('location: index.php');
}
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
<form method="post">
<label for="">Nombre</label>
<input type="text" name="nombre" id=""><br/><br/>
<label for="">Apellidos</label>
<input type="text" name="apellidos" id=""><br/><br/>
<label for="">Fecha Nacimiento</label>
<input type="date" name="fecha_nacimiento" id=""><br/><br/>
<label for="">Sexo</label>
<select name="sexo" id="">
<option value="M">Masculino</option>
<option value="F">Femenino</option>
<option value="O">Otro</option>
</select><br/><br/>
<button type="submit" name="btn_enviar">Guardar</button>
</form>
</body>
</html>