<?php

//Se incluye el model estadio
require_once "./model/EstadiosModel.php";
//Se incluye el model de Recitales.
require_once "./model/RecitalesModel.php";
//Incluye la vista de recitales.
require_once "./view/RecitalesView.php";
//Incluye la vista de estadios.
require_once "./view/EstadiosView.php";

class UsuariosController
{
  //Atributos
  private $RecitalesView;
  private $RecitalesModel;
  private $EstadiosView;
  private $EstadiosModel;

  function __construct()
  {

      //Creamos una instancia de la vistas de recitales
      $this->RecitalesView = new RecitalesView();
      //Creamos una instancia de la vista de estadios
      $this->EstadiosView = new EstadiosView();
      //Creamos una instancia del modelo recital
      $this->RecitalesModel = new RecitalesModel();
      //Creamos una instancia del modelo de estadio
      $this->EstadiosModel = new EstadiosModel();
  }

//Esto no es home, es el mostrar tabla de estadios
  function Home(){

  //Todo esto no va acá solo es para probar
    $Estadios = $this->EstadiosModel->Get();
    $this->EstadiosView->Mostrar($Estadios);

    $Recitales = $this->RecitalesModel->get();
    $this->RecitalesView->Mostrar($Recitales);

  }

}

 ?>
