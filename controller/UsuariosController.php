<?php

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

    //Si no estan vacios
    if((!empty($_POST['nombre']))&&(!empty($_POST['clave']))&&(!empty($_POST['email']))){

       //Guardo todo los parametros que me envian desde el formulario
       $nombre = $_POST['nombre'];
       $clave = $_POST['clave'];
       $email = $_POST['email'];
       $dbNombre = $this->UsuariosModel->getName($nombre);
       if(empty($dbNombre)){

          //Encripto la contraseña con bcrypt
          $hash = password_hash($clave, PASSWORD_DEFAULT);

          //Le pido al modelo que me agregue al usuario
          $this->UsuariosModel->insert($nombre, $hash, $email);

         //Preguntamos el id del usuario que se ha creado
          $idUsuarioNuevo = $this->UsuariosModel->lastInsertId();

          //Logueo al usuario creado
          session_start();
          $_SESSION['User'] = $nombre;
          $_SESSION['admin'] = 0;
          $_SESSION['idUsuario'] = $idUsuarioNuevo['id_usuario'];
          header(HOME);
       }else{

         $this->UsuariosView->signUp('El usuario ya existe elige otro');
       }
    }else{
      //Si entro acá es porque algun campo no esta lleno
      $this->UsuariosView->signUp('Todos los campos deben estar llenos');
    }
  }


}
?>
