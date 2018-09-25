<?php

//Se incluye la vista
require_once "./view/TareasView.php";
//Se incluye el model estadio
require_once "./model/EstadiosModel.php";
//Se incluye el model de Recitales.
require_once "./model/RecitalesModel.php";


class TareasController
{

  //Atributos
  private $view;
  private $RecitalesModel;
  private $EstadiosModel;

  function __construct()
  {
      //Creamos una instancia de la vista
      $this->view = new TareasView();
      //Creamos una instancia del modelo
      $this->EstadiosModel = new EstadiosModel();
  }

  function Home(){
    $Recitales = $this->EstadiosModel->get();
    $this->view->Home($Recitales);
  }
}




 ?>
