<?php

require_once "./model/RecitalesModel.php";
require_once "./model/EstadiosModel.php";

require_once "./view/TourView.php";

require_once "SecuredController.php";

class TourController extends SecuredController
{
  //Atributos model
  private $RecitalesModel;
  private $EstadiosModel;

  //Atributos view
  private $TourView;

  function __construct()
  {

    parent::__construct();
    $this->RecitalesModel = new RecitalesModel();
    $this->EstadiosModel = new EstadiosModel();
    $this->TourView = new TourView();
  }
##### Mostrar unión de las dos tablas ######

  function TourAdmin(){

    if($_SESSION['admin'] == 1){
      $recitales = $this->RecitalesModel->getAll();
      $tabla = $this->RecitalesModel->getTable();
      $estadios = $this->EstadiosModel->getAll();

      $this->TourView->mostrarTablaAdmin($estadios, $recitales, $tabla);
    }else{

      header(HOME);
    }
  }

##### Funciones de los recitales #####

  //¿Y si no esta seteado?
  function eliminarRecital($idRecital){

    if($_SESSION['admin'] == 1){
        $this->RecitalesModel->delete($idRecital);
        header(TOURADMIN);
    }else{

      header(HOME);
    }
  }

  //Faltaria agregar el error si no carga todo los datos
  function agregarRecital(){

    if($_SESSION['admin'] == 1){
      if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_estadio']))){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $id_Estadio = $_POST['id_estadio'];

        $this->RecitalesModel->Insert($nombre, $precio, $id_Estadio);
        header(TOURADMIN);
      }else{

        header(HOME);
      }
    }
  }

  function editarRecital($idRecital){

    if($_SESSION['admin'] == 1){
      $Estadios = $this->EstadiosModel->getAll();
      $Recital = $this->RecitalesModel->getById($idRecital);

      $this->TourView->editarRecital($Recital, $Estadios);
    }else{

      header(HOME);
    }
  }

  function actualizarRecital($idRecital){

    if($_SESSION['admin'] == 1){
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $idEstadio = $_POST['estadio_id'];

      $this->RecitalesModel->edit($nombre, $precio, $idEstadio, $idRecital[0]);
      header(TOURADMIN);
    }else{

      header(HOME);
    }
  }

  ##### Funciones de los estadios #####

  function agregarEstadio(){

    if($_SESSION['admin'] == 1){
        if((isset($_POST['nombre'])) && (isset($_POST['capacidad']))){
          $nombre = $_POST['nombre'];
          $capacidad = $_POST['capacidad'];

          $this->EstadiosModel->insert($nombre, $capacidad);
          header(TOURADMIN);
        }
    }else{

      header(HOME);
    }
  }

  function eliminarEstadio($idEstadio){

    if($_SESSION['admin'] == 1){
      $this->EstadiosModel->Delete($idEstadio);
      header(TOURADMIN);
    }else{

      header(HOME);
    }
  }

  function editarEstadio($idEstadio){

    if($_SESSION['admin'] == 1){
      $Estadio = $this->EstadiosModel->getById($idEstadio);
      $this->TourView->editarEstadio($Estadio);
    }else{

      header(HOME);
    }

  }

  function actualizarEstadio($idEstadio){


    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];

    $this->EstadiosModel->edit($nombre, $capacidad, $idEstadio[0]);
    header(TOURADMIN);
  }

}

 ?>
