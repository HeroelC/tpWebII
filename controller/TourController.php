<?php

require_once "./model/RecitalesModel.php";
require_once "./view/RecitalesView.php";

require_once "./model/EstadiosModel.php";
require_once "./view/EstadiosView.php";

class TourController
{
  //Atributos
  private $RecitalesModel;
  private $RecitalesView;

  private $EstadiosModel;
  private $EstadiosView;

  function __construct()
  {

    $this->RecitalesModel = new RecitalesModel();
    $this->RecitalesView = new RecitalesView();

    $this->EstadiosModel = new EstadiosModel();
    $this->EstadiosView = new EstadiosView();
  }

##### Mostrar unión de las dos tablas ######

  function Tour(){

    $recitales = $this->RecitalesModel->getAll();
    $this->RecitalesView->mostrar($recitales);

    $estadios = $this->EstadiosModel->getAll();
    $this->EstadiosView->mostrar($estadios);
  }

##### Funciones de los recitales #####

    //¿Y si no esta seteado?
  function eliminarRecital($idRecital){

        $this->RecitalesModel->delete($idRecital);
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tour");
  }

      //Faltaria agregar el error si no carga todo los datos
  function agregarRecital(){

          if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_estadio']))){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $id_Estadio = $_POST['id_estadio'];

            $this->RecitalesModel->Insert($nombre, $precio, $id_Estadio);
            header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/tour");
          }
  }

  ##### Funciones de los estadios #####

  function agregarEstadio(){

      if((isset($_POST['nombre'])) && (isset($_POST['capacidad']))){
        $nombre = $_POST['nombre'];
        $capacidad = $_POST['capacidad'];

        $this->EstadiosModel->insert($nombre, $capacidad);
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      }
  }

  function eliminarEstadio($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function editarEstadio($idEstadio){

    $Estadio = $this->EstadiosModel->getById($idEstadio);
    $this->EstadiosView->mostrar($Estadio);
  }

}

 ?>
