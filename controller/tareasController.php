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
      //Creamos una instancia del modelo estadio
      $this->EstadiosModel = new EstadiosModel();
      //Creamos una instancia del modelo recital
      $this->RecitalesModel = new RecitalesModel();
  }

//Esto no es home, es el mostrar tabla de estadios
  function Home(){

  //Todo esto no va acá solo es para probar
    $Estadios = $this->EstadiosModel->get();
    $this->view->Home($Estadios);
    $this->MostrarRecitales();
  }

  function MostrarRecitales(){

    $Recitales = $this->RecitalesModel->get();
    $this->view->mostrarRecitales($Recitales);
  }

  function EliminarRecital($idRecital){

    $this->RecitalesModel->Delete($idRecital);
    $this->Home(); //No va aca
  }

  function AgregarRecital($Recital){

    $this->RecitalesModel->Insert($Recital);
    $this->Home(); //Esto no va acá, modificar la funcion Delete en EstadiosModel para que vuelva al script
  }

  function MostrarEstadios(){

   $Estadios = $this->EstadiosModel->get();
   $this->view->Home($Estadios);
  }

  function EliminarEstadio($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    $this->Home(); //Esto no va acá, modificar la funcion Delete en EstadiosModel para que vuelva al script
  }

  function AgregarEstadio($estadio){

    $this->EstadiosModel->Insert($estadio);
    $this->Home(); //Esto no va acá, modificar la funcion Delete en EstadiosModel para que vuelva al script
  }



}




 ?>
