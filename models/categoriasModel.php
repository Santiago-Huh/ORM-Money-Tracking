<?php

class CategoriasModel extends AppModel
{
  private static $nombre = "categorias";

  public function getCategorias(){
    $categorias = $this->_db->query("SELECT * FROM categories");

    return $categorias->fetchall();
  }
}
