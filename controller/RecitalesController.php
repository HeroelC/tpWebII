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
