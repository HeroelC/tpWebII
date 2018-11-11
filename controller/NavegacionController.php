<?php

require_once "./view/NavegacionView.php";
require_once "./model/RecitalesModel.php";
require_once "./model/ImagenesModel.php";

class NavegacionController
{

  private $NavegacionView;
  private $RecitalesModel;
  private $Session;
  private $ImagenesModel;

  function __construct()
  {

    $this->NavegacionView = new NavegacionView();
    $this->ImagenesModel = new ImagenesModel();
    $this->RecitalesModel = new RecitalesModel();
    $this->Session = session_start();
  }

  function home(){

    $this->Session;
    $this->NavegacionView->Home();
  }

  function band(){

    $this->Session;
    $this->NavegacionView->Band();
  }

  function music(){

    $this->Session;
    $this->NavegacionView->Music();
  }

  function tour() {

    $Tabla = $this->RecitalesModel->getTable();
    $this->NavegacionView->tour($Tabla);
  }

  function detalleRecital($id_recital = null){

      $imagenes = $this->ImagenesModel->getByRecital($id_recital);
      $Fila = $this->RecitalesModel->getConcert($id_recital);
      $this->NavegacionView->detalleRecital($Fila, $imagenes);
  }

  function Estadio($id_estadio = null){

    $Tabla = $this->RecitalesModel->getTableByStadium($id_estadio);
    $this->NavegacionView->tour($Tabla);
  }
}

 ?>
