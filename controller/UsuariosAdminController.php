<?php

require_once "SecuredController.php";

require_once "./model/UsuariosModel.php";
require_once "./view/UsuariosView.php";

class UsuariosAdminController extends SecuredController
{
  private $UsuariosModel;
  private $UsuariosView;

  function __construct()
  {

    parent::__construct(); //Inicializamos el constructor de SecuredController

    $this->UsuariosModel = new UsuariosModel();
    $this->UsuariosView = new UsuariosView();
  }

  function mostrarUsuarios(){

    if($_SESSION['admin'] == 1){

      $usuarios = $this->UsuariosModel->getAll();
      $this->UsuariosView->getAllUser($usuarios);
    }else{

      header(HOME);
    }
  }

  function eliminarUsuario($id_usuario){

    if($_SESSION['admin'] == 1){

      $id = $id_usuario[0];
      $this->UsuariosModel->delete($id);
      header(USUARIOS);
    }
  }

}



 ?>