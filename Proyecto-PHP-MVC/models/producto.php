<?php
class Producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }
    //GETTER Y SETTER
    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCategoria_id(){
        return $this->categoria_id;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getStock(){
        return $this->stock;
    }
    function getOferta(){
        return $this->oferta;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getImagen(){
        return $this->imagen;
    }
    function setId($id){
        $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    function setCategoria_id($categoria_id){
        $this->categoria_id = $this->db->real_escape_string($categoria_id);
    }
    function setDescripcion($descripcion){
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }
    function setStock($stock){
        $this->stock = $this->db->real_escape_string($stock);
    }
    function setOferta($oferta){
        $this->oferta = $this->db->real_escape_string($oferta);
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getAll(){
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $productos = $this->db->query($sql);
        return $productos;
    }

    //PARA LOS PRODUCTOS POR CATEGORIA
    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre as 'cat_nom' FROM productos p "
                ."JOIN categorias c ON p.categoria_id = c.id "
                ."WHERE p.categoria_id = {$this->getCategoria_id()} " 
                ."ORDER BY id DESC";
        $productos = $this->db->query($sql);
        return $productos;
    }


    public function getRandom($limit){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit;");
        return $productos;
    }
    public function getOne(){
        $sql = "SELECT * FROM productos WHERE id = {$this->getId()};";
        $productos = $this->db->query($sql); 
        return $productos->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL,{$this->getCategoria_id()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},NULL,CURDATE(),'{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result=true;
        }
        return $result;
    }
    public function delete(){
        $sql = "DELETE FROM productos WHERE id = {$this->id};";
        $delete = $this->db->query($sql);
        
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }
}


?>