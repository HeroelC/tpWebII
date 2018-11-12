<?php

require_once "Api.php";
require_once "../model/ComentariosModel.php";
require_once "../model/UsuariosModel.php";

class ComentariosApiController extends Api{


  private $ComentariosModel;
  private $UsuariosModel;

  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuariosModel = new UsuariosModel();
  }

  function MostrarComentarios($id_recital = null){

    if(isset($id_recital)){
      $data = $this->ComentariosModel->getByRecital($id_recital);
    }else{
      $data = $this->ComentariosModel->getAll();
    }
    if (isset($data)) {
      return $this->json_response($data,200);
    }else {
      return $this->json_response(null,404);
    }

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

  function BorrarComentarios($id_comentario){
    if ($_SESSION['admin'] == 1) {
      if (isset($id_comentario)) {
        $this->ComentariosModel->delete($id_comentario);
      }else {
        // code...
      }
    }else {
      // code...
    }
  }

}

 ?>
