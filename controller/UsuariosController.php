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
    //Me fijo que los valores esten seteados.
    if((!empty($_POST['nombre'])) && (!empty($_POST['clave']))){

      $nombre = $_POST['nombre'];
      $clave = $_POST['clave'];

      ####Acá debería verificar si el usuario existe en la base de datos####
      $dbNombre = $this->UsuariosModel->getName($nombre);

      //echo '<h1> Contenido de $dbNombre: '.print_r($dbNombre).'</h1>';

        if($dbNombre != null){

            //Le pedimos el hash
            $hash = $dbNombre[0]['clave'];

            //Verificar si la password es la misma que el hash de la base de datos
               if(password_verify($clave, $hash)){
                 //Si es la misma debería loguearlo y mostrartele o tour o el home
                 echo 'Contraseña valida';
                 echo 'Password: '.$clave.' Hash: '.print_r($hash);
               }else{
                 //Si no es la misma deberia volver al login y mostrarle algun error.
                  $this->UsuariosView->login('Contraseña incorrecta');
               }
        }else{
          //El usuario no existe
          $this->UsuariosView->login('Usuario inexistente');
        }
    }else{
      //Si los parametros no estan seteados le digo que todo los campos deben estar completados
      $this->UsuariosView->login('Todos los campos deben estar llenos');
    }

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
