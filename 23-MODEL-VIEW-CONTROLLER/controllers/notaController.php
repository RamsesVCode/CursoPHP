<?php
class NotaController{
    public function listar(){
        //modelo
        require_once 'models/nota.php';
        //logica accion del controlador
        $nota = new Nota();
        $notas=$nota->conseguirTodos('notas');
        //vista
        require_once 'views/nota/listar.php';
    }
    public function crear(){
        //modelo
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuarioId(3);
        $nota->setTitulo('PROGRAMACION');
        $nota->setDescripcion('NOTA PROGRAMACIÓN');
        $guardar = $nota->guardar();
        header('Location:index.php?controller=Nota&action=listar');
        require_once 'views/nota/listar.php';
    }
    public function borrar(){
        
    }
}

?>