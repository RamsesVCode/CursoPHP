<?php
require_once 'models/pedido.php';
class PedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }
    public function add(){
        if(isset($_SESSION['identity'])){
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];

            if($provincia && $localidad && $direccion){
                //Guardar datos en la BD 
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                
                $save = $pedido->save();

                //GUARDAR LINEA PEDIDO
                $save_linea = $pedido->save_linea();
        
                if($save && $save_linea){
                    $_SESSION['pedido']="Completed";
                }else{
                    $_SESSION['pedido']="Failed";
                }
            }else{
                $_SESSION['pedido']="Failed";
            }
        }else{
            header('Location:'.base_url);
        }
        header('Location:'.base_url.'pedido/confirmado');
    }
    public function confirmado(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getByUser()->fetch_object();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }
    public function mis_pedidos(){
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();
        require_once 'views/pedido/mis_pedidos.php';
    }
    public function detalle(){
        Utils::isIdentity();

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            //SACAR LOS DATOS DEL PEDIDO
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();

            //SACAR LOS PRODUCTOS
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);

            //LISTAR LA INFORMACION
            require_once 'views/pedido/detalle.php';
        }else{
            header('Location:'.base_url.'pedido/mis_pedidos');
        }
    }
    public function gestion(){
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedidos = $pedido->getAll();
        require_once 'views/pedido/mis_pedidos.php';
    }
    public function estado(){
        Utils::isAdmin();
        if($_POST['pedido_id'] && isset($_POST['estado'])){
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            //UPDATE DEL PEDIDO
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->edit();
            
            header('Location:'.base_url.'pedido/detalle&id='.$id);
        }else{
            header('Location:'.base_url);
        }
    }
}
?>