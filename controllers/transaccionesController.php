<?php

class transaccionesController extends AppController
{
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $transacciones = $this->loadModel("transaccion");
        $this->_view->transacciones = $transacciones->getTransacciones();

        $this->_view->titulo = "Listado de transacciones";
        $this->_view->renderizar("index");
    }

    public function agregar(){
        if ($_POST){
            $transacciones = $this->loadModel("transaccion");
            if ($transacciones->guardar($_POST)){
                $this->_messages->success('Transacción guardada correctamente', $this->redirect(array("controller"=>"transacciones"))
                );
            }
        }

        $cuentas = $this->loadModel("cuentas");
        $this->_view->cuentas = $cuentas->getCuentas();

        $categorias = $this->loadModel("categorias");
        $this->_view->categorias = $categorias->getCategorias();

        $this->_view->titulo = "Agregar transacción";
        $this->_view->renderizar("agregar");
    }

    public function editar($id=null){
        if ($_POST){
            $transaccion = $this->loadModel("transaccion");

            if ($transaccion->actualizar($_POST)){
                $this->_messages->success('Datos guardados correctamente', $this->redirect(array("controller"=>"transacciones")));
            }else{
                $this->_view->flashMessage = "Error al guardar los datos...";
                $url = $this->redirect(array("controller"=>"transacciones", "action"=>"editar/".$id));
                header("LOCATION:".$url);
            }
        }
        $transaccion = $this->loadModel("transaccion");
        $this->_view->tarea = $transaccion->buscarPorId($id);

        $cuentas = $this->loadModel("cuentas");
        $this->_view->cuentas = $cuentas->getCuentas();

        $categorias = $this->loadModel("categorias");
        $this->_view->categorias = $categorias->getCategorias();

        $this->_view->titulo = "Editar transaccion";
        $this->_view->renderizar("editar");
    }
}