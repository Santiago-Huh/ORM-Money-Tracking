<?php

class categoriasController extends AppController
{
  public function __construct(){
    parent::__construct();
  }

  public function index()
  {
    $categorias = $this->loadModel("categorias");
    $this->_view->categorias = $categorias->getCategorias();

    $this->_view->titulo = "Listado de categorias";
    $this->_view->renderizar("index");
  }
}
