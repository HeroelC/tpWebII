<?php

require_once "./controller/EstadiosController.php";
require_once "./controller/RecitalesController.php";

require_once "./view/UsuariosView.php";
require_once "./model/UsuariosModel.php";

class UsuariosController
{
  //Atributos

  private $EstadiosController;
  private $RecitalesController;

  private $UsuariosView;
  private $UsuariosModel;

  function __construct()
  {

      $this->EstadiosController = new EstadiosController;
      $this->RecitalesController = new RecitalesController;

      $this->UsuariosView = new UsuariosView;
      $this->UsuariosModel = new UsuariosModel;
  }

//Esto no es home, es el mostrar tabla de estadios, esto cuando se termine se va
  function Home(){
    $this->UsuariosView->mostrar();

    $this->EstadiosController->mostrarEstadios();
    $this->RecitalesController->mostrarRecitales();

    echo '<h1>Probando GET ID</h1>';

    // $Estadio = $this->EstadiosModel->getId(21);
    // $this->EstadiosView->mostrar($Estadio);

  }

  function signUp(){

    $this->UsuariosView->signUp();
  }

  function agregarUsuario(){

    if(isset($_POST['nombre'])){

      $nombre = $_POST['nombre'];
      $clave = $_POST['clave'];
      $email = $_POST['email'];

      $this->UsuariosModel->insert($nombre, $clave, $email);
    }

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>
