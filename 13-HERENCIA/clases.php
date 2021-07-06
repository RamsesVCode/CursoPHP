<?php
    //Posibilidad de compartir atributos y metodos entre clases
    class Persona{
        public $nombre;
        public $apellidos;
        public $altura; 
        public $edad;
        
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
        public function hablar(){
            return "Estoy hablando";
        }
        public function caminar(){
            return "Estoy caminando";
        }
    }

    class Informatico extends Persona{
        public $lenguajes;
        public $experienciaProgramador;
        public function __construct($lenguajes,$experienciaProgramador){
            $this->lenguajes=$lenguajes;
            $this->experienciaProgramador=$experienciaProgramador;
        }
        public function sabeLenguajes($lenguajes){
            $this->lenguajes=$lenguajes;
            return $this->lenguajes;
        }
        public function programar(){
            return "Soy programador";
        }
        public function repararOrdenador(){
            return "Reparar ordenadores";
        }
        public function hacerOfimatica(){
            return "Estoy escribiendo en word";
        }
    }
    class TecnicoRedes extends Informatico{
        public $auditaRedes;
        public $experienciaRedes;
        public function __construct($auditaRedes,$experienciaRedes){
            parent::__construct();
            $this->auditaRedes=$auditaRedes;
            $this->experienciaRedes=$experienciaRedes;
        }
        public function auditoria() {
            return "Estoy auditando una red";
        }
    }
?>