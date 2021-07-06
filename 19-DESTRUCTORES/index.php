<?php
    class Usuario{
        public $nombre;
        public $email;
        public function __construct(){
            $this->nombre = "Edward";
            $this->email = "Prueba@gmail.com";
            echo "Creando el objeto<br/>";
        }
        public function __destruct(){
            echo "<br/>Destruyendo el objeto";
        }
        public function __toString(){
            return "Hola, {$this->nombre}, estas registrado con {$this->email}";
        }
    }
    $usuario = new Usuario();
    // echo $usuario->email;
    echo $usuario;

?>