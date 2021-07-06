<?php
class Categoria{

    //ATRIBUTOS PRESENTES EN LA BD
    private $id;
    private $nombre;
    private $db;
    //CONEXION A LA BD
    public function __construct(){
        $this->db = Database::connect();
    }

    //METODOS GETTER Y SETTER
    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setId($id){
        $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getAll(){
        $sql = "SELECT * FROM categorias ORDER BY id DESC";
        $categorias = $this->db->query($sql);
        return $categorias;
    }
    public function getOne(){
        $sql = "SELECT * FROM categorias WHERE id = {$this->getId()};";
        $categoria = $this->db->query($sql);
        return $categoria->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO categorias VALUES(NULL,'{$this->nombre}')";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}
?>