<?php
class EntityArray{
    public function estudiantesArray($id_estudiante,$nombre,$apellidos,$fecha_nacimiento,$sexo){
    $datos = array(
    'id_estudiante' => $id_estudiante,
    'nombre' => $nombre,
    'apellidos' => $apellidos,
    'fecha_nacimiento' => $fecha_nacimiento,
    'sexo' => $sexo
    );
    return $datos;
    }
}
?>