<?php


class RecitalesController
{

  function __construct()
  {

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
