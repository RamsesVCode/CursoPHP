<?php
    interface Ordenador{
        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfragmentar();
        public function detectarUSB();

    }
    class iMac implements Ordenador{
        private $modelo;
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo=$modelo;
        }
        //DECLARAMOS LAS FUNCIONES PARA EL CONTRATO
        public function encender(){
        }
        public function apagar(){
        }
        public function reiniciar(){
        }
        public function desfragmentar(){
        }
        public function detectarUSB(){
        }
    
    }

    $maquintosh = new iMac();
    $maquintosh->setModelo('Macbook PRO 2019');
    echo $maquintosh->getModelo();
    // var_dump($maquintosh);

?>