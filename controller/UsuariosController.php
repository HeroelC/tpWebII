<?php

//Constantes
define('HOME', 'http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

require_once "./view/UsuariosView.php";
require_once "./model/UsuariosModel.php";

class UsuariosController
{
  //Atributos
  private $UsuariosView;
  private $UsuariosModel;

  function __construct()
  {

      $this->UsuariosView = new UsuariosView;
      $this->UsuariosModel = new UsuariosModel;
  }

  function signUp(){

    $this->UsuariosView->signUp();
  }

  function login(){

    $this->UsuariosView->login();
  }

  function verificarLogin(){

    if((isset($_POST['nombre'])) && (isset($_POST['clave']))){

      $nombre = $_POST['nombre'];
      $clave = $_POST['clave'];

      $hash = $this->UsuariosModel->getHash($nombre);
      //VERIFICAR SI LA PW ES IGUAL A LA QUE ESTA EN LA BASE DE DATOS
         if(password_verify($clave, $hash[0]['clave'])){
           echo 'Contraseña valida';
           echo 'Password: '.$clave.' Hash: '.print_r($hash);
         }else{
            echo 'Contraseña invalida';
            echo 'Password: '.$clave.' Hash: '.print_r($hash);
         }
    }else{

    }

  }

  function agregar(){

    if(isset($_POST['nombre'])){
       $length = strlen($_POST['nombre']);
      if ($length > 0) {

        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $email = $_POST['email'];

        $hash = password_hash($clave, PASSWORD_DEFAULT);

        $this->UsuariosModel->insert($nombre, $hash, $email);
        header("Location:".HOME);

      }
    }
  }

}
?>
