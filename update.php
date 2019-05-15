<?php
require_once('EstudiantesModel.php');
require_once('EntityArray.php');
$estudiantesModel = new EstudiantesModel;
if (isset($_GET['id_estudiante'])) {
    $id = $_GET['id_estudiante'];
    $estudiantes = $estudiantesModel->findById($id);
    if (isset($_POST['btn_enviar'])) {
        $arrglo = EntityArray::estudiantesArray($id, $_POST['nombre'],$_POST['apellidos'],
        $_POST['fecha_nacimiento'],$_POST['sexo']);
        //var_dump($arrglo);
        $estudiantesModel->update($arrglo);
        header('location: index.php');
    }
}

?>
<form method="post">
<label for="">Nombre</label>
<input type="text" name="nombre" value="<?php echo $estudiantes[0]['nombre'] ?>"  id=""><br/><br/>
<label for="">Apellidos</label>
<input type="text" name="apellidos" value="<?php echo $estudiantes[0]['apellidos'] ?>" id=""><br/><br/>
<label for="">Fecha Nacimiento</label>
<input type="date" name="fecha_nacimiento" value="<?php echo $estudiantes[0]['fecha_nacimiento'] ?>" id=""><br/><br/>
<label for="">Sexo</label>
<select name="sexo" id="">
<option value="M" <?php if($estudiantes[0]['sexo']=='M'){echo "selected";} ?>>Masculino</option>
<option value="F" <?php if($estudiantes[0]['sexo']=='F'){echo "selected";} ?>>Femenino</option>
<option value="O" <?php if($estudiantes[0]['sexo']=='O'){echo "selected";} ?>>Otro</option>
</select><br/><br/>
<button type="submit" name="btn_enviar">Guardar</button>
</form>