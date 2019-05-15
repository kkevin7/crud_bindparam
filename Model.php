<?php
abstract class Model{

    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_name = 'colegio';
    private static $db_charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();
    protected $stmt;

    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();    

    private function db_open(){
        $this->conn = new mysqli(self::$db_host,self::$db_user,self::$db_pass,self::$db_name);
        $this->conn->set_charset(self::$db_charset);

        // Check connection
    if ($this->conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    }

    private function db_close(){
        $this->conn->close();
    }

    protected function set_query(){
        $this->db_open();
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        $this->db_close();
    }

    protected function get_query(){
        $this->db_open();
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        $result = $this->stmt->get_result();
        while($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->db_close();
        return array_pop($this->rows);
    }

}
?>