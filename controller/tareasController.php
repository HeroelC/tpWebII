<?php

//Se incluye la vista
require_once "./view/TareasView.php";
//Se incluye el model estadio
require_once "./model/EstadiosModel.php";
//Se incluye el model de Recitales.
require_once "./model/RecitalesModel.php";
//Incluye el model de Estadios;

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
      //Creamos una instancia del modelo recital
      $this->RecitalesModel = new RecitalesModel();
      //Creamos una instancia del modelo de estadio
      $this->EstadiosModel = new EstadiosModel();
  }

//Esto no es home, es el mostrar tabla de estadios
  function Home(){

  //Todo esto no va acá solo es para probar
    $Estadios = $this->EstadiosModel->get();
    $this->view->Home($Estadios);
    $this->MostrarRecitales();
  }



}




 ?>
