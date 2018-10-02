<?php

require_once "./controller/EstadiosController.php";
require_once "./controller/RecitalesController.php";

require_once "./view/UsuariosView.php";
require_once "./model/UsuariosModel.php";

class UsuariosController
{
  //Atributos
  private $UsuariosView;
  private $UsuariosModel;

  private $EstadiosModel;
  private $RecitalesModel;
  
  function __construct()
  {

      $this->UsuariosView = new UsuariosView;
      $this->UsuariosModel = new UsuariosModel;

      $this->EstadiosModel = new EstadiosModel;
      $this->RecitalesModel = new RecitalesModel;
  }

  function signUp(){

    $this->UsuariosView->signUp();
  }

  function login(){

    $this->UsuariosView->login();
  }

  function tour(){

    $Estadios = $this->EstadiosModel->getAll();
    $Recitales = $this->RecitalesModel->getAll();

    $this->UsuariosView->tour($Estadios, $Recitales);

  }

  function agregar(){

    if(isset($_POST['nombre'])){
       $length = strlen($_POST['nombre']);
      if ($length > 0) {

        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $email = $_POST['email'];

        $this->UsuariosModel->insert($nombre, $clave, $email);
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      }

  }

}

}
?>
