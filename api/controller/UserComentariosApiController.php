<?php

require_once "Api.php";
require_once "../model/ComentariosModel.php";
require_once "../controller/SecuredController.php";
require_once "../model/UsuariosModel.php";

class UserComentariosApiController extends Api, SecuredController
{
  //???
  private $ComentariosModel;
  private $UsuariosModel;

  function __construct()
  {
    parent::__construct();
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuariosModel = new UsuariosModel();
  }

  function InsertarComentario($id_recital){
    $mensaje = $_POST['mensaje'];
    $puntaje = $_POST['puntaje'];

    if(isset($_SESSION['User'])){
      $nombre = $_SESSION['User'];
      $datosUsuario = $this->UsuariosModel->getName($nombre);
      if ((isset($mensaje))&&(isset($puntaje))) {
        $this->ComentariosModel->insert($mensaje, $puntaje, $datosUsuario[0]['id_usuario'], $id_recital);
      }else{
        $this->json_response(null, 300);
        }
    }
  }


}


 ?>
