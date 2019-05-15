<?php
require_once('Model.php');
class EstudiantesModel extends Model{

    private $id_estudiante;
    private $nombre;
    private $apellidos;
    private $fecha_nacimiento;
    private $sexo;

    public function create($datos = array()){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        $this->query = "INSERT INTO estudiantes VALUES (null, :nombre, '$apellidos', '$fecha_nacimiento', '$sexo');";
        $this->stmt->bind_param(":nombre","Maria Juana");
        $this->set_query();
    }
    public function read(){
        $datos = array();
        $this->query = "SELECT * FROM estudiantes;";
        $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($datos,$value);
        }
        return $datos;
    }
    public function update($datos = array()){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        $this->query = "UPDATE estudiantes SET nombre = '$nombre', apellidos = '$apellidos', fecha_nacimiento = '$fecha_nacimiento', sexo ='$sexo' WHERE id_estudiante=$id_estudiante;";
        $this->set_query();
    }
    public function delete($id_estudiante = ''){
        $this->query = "DELETE FROM estudiantes WHERE id_estudiante= $id_estudiante";
        $this->set_query();
    }    
    public function findById($id_estudiante = ''){
        $datos = array();
        $this->query = "SELECT * FROM estudiantes WHERE id_estudiante=$id_estudiante;";
        $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($datos,$value);
        }
        return $datos;
    }
}
?>