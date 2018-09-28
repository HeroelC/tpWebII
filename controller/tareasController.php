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

  function MostrarRecitales(){

    $Recitales = $this->RecitalesModel->get();
    $this->view->mostrarRecitales($Recitales);
  }

  function EliminarRecital($idRecital){

    $this->RecitalesModel->Delete($idRecital);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function AgregarRecital(){
    print_r($_POST);
    $Recital[0] = $_POST["nombre"];
    $Recital[1] = $_POST["precio"];
    $Recital[2] = $_POST["id_estadio"];

    echo 'console.log(enviado)';
    echo 'console.log('.print_r($Recital).')';
    $this->RecitalesModel->Insert($Recital);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }


}




 ?>
