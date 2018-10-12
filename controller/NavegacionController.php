<?php

require_once "./view/NavegacionView.php";
require_once "./model/RecitalesModel.php";

class NavegacionController
{

  private $NavegacionView;
  private $RecitalesModel;

  function __construct()
  {

    $this->NavegacionView = new NavegacionView;
    $this->RecitalesModel = new RecitalesModel;
  }

  function home(){

    $this->NavegacionView->Home();
  }

  function band(){

    $this->NavegacionView->Band();
  }

  function music(){

    $this->NavegacionView->Music();
  }

  function tour() {

    $Tabla = $this->RecitalesModel->getTable();
    $this->NavegacionView->tour($Tabla);
  }

  function detalleRecital($id_recital){

    $Fila = $this->RecitalesModel->getConcert($id_recital);
    $this->NavegacionView->detalleRecital($Fila);
  }

  function Estadio($id_estadio){

    $Tabla = $this->RecitalesModel->getTableByStadium($id_estadio);
    $this->NavegacionView->tour($Tabla);
  }
}

 ?>
