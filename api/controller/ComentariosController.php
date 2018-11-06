<?php

require_once "../model/ComentariosModel.php";

class ComentariosController
{

  private $ComentariosModel;

  function __construct()
  {

    $this->ComentariosModel = new ComentariosModel();
  }

  
}


 ?>
