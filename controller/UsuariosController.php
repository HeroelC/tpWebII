<?php

require_once "./controller/EstadiosController.php";
require_once "./controller/RecitalesController.php";
require_once "./view/UsuariosView.php";

class UsuariosController
{
  //Atributos

  private $EstadiosController;
  private $RecitalesController;
  private $UsuariosView;

  function __construct()
  {

      $this->EstadiosController = new EstadiosController;
      $this->RecitalesController = new RecitalesController;
      $this->UsuariosView = new UsuariosView;
  }

//Esto no es home, es el mostrar tabla de estadios
  function Home(){
    $this->UsuariosView->mostrar();
    
    $this->EstadiosController->mostrarEstadios();
    $this->RecitalesController->mostrarRecitales();

    echo '<h1>Probando GET ID</h1>';

    // $Estadio = $this->EstadiosModel->getId(21);
    // $this->EstadiosView->mostrar($Estadio);

  }

}

 ?>
