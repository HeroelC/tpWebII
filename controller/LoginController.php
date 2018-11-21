<?php

require_once "./view/LoginView.php";
require_once "./model/UsuariosModel.php";

class LoginController
{

  private $UsuariosModel;
  private $LoginView;

  function __construct()
  {

    $this->UsuariosModel = new UsuariosModel();
    $this->LoginView = new LoginView();
  }

  function login(){

    $this->LoginView->login();
  }

  function verificarLogin(){
    //Me fijo que los valores esten seteados.
    if((!empty($_POST['nombre'])) && (!empty($_POST['clave']))){

      $nombre = $_POST['nombre'];
      $clave = $_POST['clave'];

      ####Acá debería verificar si el usuario existe en la base de datos####
      $datosUsuario = $this->UsuariosModel->getName($nombre);

        if(!empty($datosUsuario)){

            //Le pedimos el hash
            $hash = $datosUsuario[0]['clave'];

            //Verificar si la password es la misma que el hash de la base de datos
               if(password_verify($clave, $hash)){
                 //Si es la misma debería loguearlo y mostrartele o tour o el home
                 session_start();
                 $_SESSION['User'] = $nombre;
                 $_SESSION['admin'] = $datosUsuario[0]['admin'];
                 $_SESSION['idUsuario'] = $datosUsuario[0]['id_usuario'];
                 header(HOME);
               }else{
                 //Si no es la misma deberia volver al login y mostrarle algun error.
                  $this->LoginView->login('Contraseña incorrecta');
               }
        }else{
          //El usuario no existe
          $this->LoginView->login('Usuario inexistente');
        }
    }else{
      //Si los parametros no estan seteados le digo que todo los campos deben estar completados
      $this->LoginView->login('Todos los campos deben estar llenos');
    }
  }

  function logout(){

    session_start();
    session_destroy();
    header(LOGIN);
  }


}

 ?>
