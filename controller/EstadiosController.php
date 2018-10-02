<?php

require_once "./view/EstadiosView.php";
require_once "./model/EstadiosModel.php";

class EstadiosController
{

  private $EstadiosModel;
  private $EstadiosView;

  function __construct()
  {

    $this->EstadiosModel = new EstadiosModel;
    $this->EstadiosView = new EstadiosView;
  }

  function mostrar(){

   $Estadios = $this->EstadiosModel->getAll();
   $this->EstadiosView->mostrar($Estadios);
  }

  function eliminar($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

//¿Por que si no estan seteados los parametros me deja cargarlos igual?
  function agregar(){

    if((isset($_POST['nombre'])) && (isset($_POST['capacidad']))){
      $nombre = $_POST['nombre'];
      $capacidad = $_POST['capacidad'];

      $this->EstadiosModel->insert($nombre, $capacidad);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }
  }

  function editar($idEstadio){
    $Estadio = $this->EstadiosModel->getId($idEstadio);
    $this->EstadiosView->mostrar($Estadio);
  }
}

 ?>
