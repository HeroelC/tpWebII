<?php


/**
 *
 */
class EstadiosController
{

  function __construct()
  {
    // code...
  }

  function MostrarEstadios(){

   $Estadios = $this->EstadiosModel->get();
   $this->view->Home($Estadios);
  }

  function EliminarEstadio($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function AgregarEstadio($estadio){

    $this->EstadiosModel->Insert($estadio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>
