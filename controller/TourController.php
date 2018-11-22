<?php

require_once "./model/RecitalesModel.php";
require_once "./model/EstadiosModel.php";
require_once "./model/ImagenesModel.php";
require_once "./view/TourView.php";
require_once "SecuredController.php";

class TourController extends SecuredController
{
  //Atributos model
  private $RecitalesModel;
  private $EstadiosModel;
  private $ImagenesModel;

  //Atributos view
  private $TourView;

  function __construct()
  {

    parent::__construct();
    $this->RecitalesModel = new RecitalesModel();
    $this->EstadiosModel = new EstadiosModel();
    $this->ImagenesModel = new ImagenesModel();

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

  function eliminarRecital($idRecital){

    if($_SESSION['admin'] == 1){
      if(isset($idRecital)){
        $this->RecitalesModel->delete($idRecital);
        header(TOURADMIN);
      }else{
        header(HOME);
      }
    }else{
      header(HOME);
    }
  }

  function agregarRecital(){

    if($_SESSION['admin'] == 1){
      if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_estadio']))){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $id_Estadio = $_POST['id_estadio'];

        $arrayImagenes = array();

        if (isset($_FILES['imagenes'])){

        	$cantidad= count($_FILES["imagenes"]["tmp_name"]);

        	for ($i=0; $i<$cantidad; $i++){
        	   //Comprobamos si el fichero es una imagen
        	  if ($_FILES['imagenes']['type'][$i]=='image/png' || $_FILES['imagenes']['type'][$i]=='image/jpeg'){
              array_push($arrayImagenes, $this->ImagenesModel->subirImagen($_FILES["imagenes"]["tmp_name"][$i]));
        	   }
          }
        }

        //Insertamos el recital
        $this->RecitalesModel->Insert($nombre, $precio, $id_Estadio);
        //Ultimo recital insertado
        $numeroRecital = $this->RecitalesModel->lastInsertId();

        $this->subirImg($arrayImagenes, $numeroRecital['id_recital']);

        header(TOURADMIN); //Redireccionamos al TourAdmin
      }else{

        header(HOME); //Si no es admin va al home
      }
    }
  }

  function subirImg($arrayImagenes, $numeroRecital){

    $cantidad = count($arrayImagenes); //Contamos cantidad de imagenes que selecciono

    for ($i=0; $i < $cantidad ; $i++) {

      $this->ImagenesModel->insert($arrayImagenes[$i], $numeroRecital);
    }
  }

  function editarRecital($idRecital){

    if($_SESSION['admin'] == 1){
      $Estadios = $this->EstadiosModel->getAll();
      $Recital = $this->RecitalesModel->getById($idRecital);
      $Imagenes = $this->ImagenesModel->getByRecital($idRecital);
      $this->TourView->editarRecital($Recital, $Estadios, $Imagenes);
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
      $arrayImagenes = array();

      if (isset($_FILES['imagenes'])){

        $cantidad= count($_FILES["imagenes"]["tmp_name"]);

        for ($i=0; $i<$cantidad; $i++){
           //Comprobamos si el fichero es una imagen
          if ($_FILES['imagenes']['type'][$i]=='image/png' || $_FILES['imagenes']['type'][$i]=='image/jpeg'){
            array_push($arrayImagenes, $this->ImagenesModel->subirImagen($_FILES["imagenes"]["tmp_name"][$i]));
           }
        }
        $this->subirImg($arrayImagenes, $idRecital[0]);
      }
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
        if(empty($nombre)){
          header(TOURADMIN);
        }else{
          $this->EstadiosModel->insert($nombre, $capacidad);
          header(TOURADMIN);
        }

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

    if($_SESSION['admin'] == 1){
      $nombre = $_POST['nombre'];
      $capacidad = $_POST['capacidad'];

      $this->EstadiosModel->edit($nombre, $capacidad, $idEstadio[0]);
      header(TOURADMIN);
    }else{
      header(HOME);
    }
  }

  function eliminarImagen($id_img){
    if($_SESSION['admin'] == 1){
      $this->ImagenesModel->delete($id_img);

      header(TOURADMIN);
    }else{

      header(HOME);
    }
  }
}

 ?>
