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

  function agregar(){

    if((!empty($_POST['nombre']))&&(!empty($_POST['clave']))&&(!empty($_POST['email']))){
       // $length = strlen($_POST['nombre']);

        //Guardo todo los parametros que me envian desde el formulario
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $email = $_POST['email'];

        //Encripto la contraseña con bcrypt
        $hash = password_hash($clave, PASSWORD_DEFAULT);

        //Le pido al modelo que me agregue al usuario
        $this->UsuariosModel->insert($nombre, $hash, $email);
        header("Location:".HOME);
    }else{
      $this->UsuariosView->signUp('Todos los campos deben estar llenos');
    }
  }

}
?>
