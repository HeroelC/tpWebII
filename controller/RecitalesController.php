<?php

//define('TOUR' , header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tour"));

require_once "./view/RecitalesView.php";
require_once "./model/RecitalesModel.php";

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

  function mostrar(){

    $Recitales = $this->RecitalesModel->getAll();
    $this->RecitalesView->mostrar($Recitales);
  }

//¿Y si no esta seteado?
  function eliminar($idRecital){

    $this->RecitalesModel->delete($idRecital);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tour");
  }

//Faltaria agregar el error si no carga todo los datos
  function agregar(){

    if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_estadio']))){
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $id_Estadio = $_POST['id_estadio'];

      $this->RecitalesModel->Insert($nombre, $precio, $id_Estadio);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tour");
    }

  }

}


 ?>
