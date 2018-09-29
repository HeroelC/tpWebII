<?php

require_once "./view/EstadiosView.php";
require_once "./model/EstadiosModel.php";

class RecitalesController
{

  private $RecitalesView;
  private $RecitalesModel;

  function __construct()
  {

    //Inicializamos las clases que vamos a necesaitar.
    $this->RecitalesView = new RecitalesView();
    $this->RecitalesModel = new RecitalesModel();
  }

  function mostrarRecitales(){

    $Recitales = $this->RecitalesModel->get();
    $this->view->mostrarRecitales($Recitales);
  }

  function eliminarRecital($idRecital){

    $this->RecitalesModel->Delete($idRecital);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

//Faltaria agregar el error si no carga todo los datos
  function agregarRecital(){

    if((isset($_POST["nombre"])) && (isset($_POST["precio"])) &&(isset($_POST["id_estadio"]))){
      $Recital[0] = $_POST["nombre"];
      $Recital[1] = $_POST["precio"];
      $Recital[2] = $_POST["id_estadio"];

      $this->RecitalesModel->Insert($Recital);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

  }

}


 ?>
