<?php

require_once "Api.php";
require_once "ApiSecuredController.php";

require_once "../model/ComentariosModel.php";
require_once "../model/UsuariosModel.php";

class SecuredComentariosApiController extends ApiSecuredController{

  private $ComentariosModel;
  private $UsuariosModel;

  function __construct()
  {

    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuariosModel = new UsuariosModel();
  }

  function InsertarComentario($id_recital){

    $mensaje = $_POST['mensaje'];
    $puntaje = $_POST['puntaje'];

    if($this->Logueado())){
      $nombre = $_SESSION['User'];
      $datosUsuario = $this->UsuariosModel->getName($nombre);
      if ((isset($mensaje))&&(isset($puntaje))) {
        $this->ComentariosModel->insert($mensaje, $puntaje, $datosUsuario[0]['id_usuario'], $id_recital);
      }else{
        $this->json_response(null, 300);
        }
    }
  }

  function BorrarComentarios($param = null){
    if ($this->Logueado() && $this->esAdmin()) {
     if (isset($param)) {
       $id_comentario = $param[0];
       if ($comentario) {
         $this->ComentariosModel->delete($id_comentario);
         $this->json_response("Comentario Borrado", 200)
       }else{
         $this->json_response(null, 300);
       }
     }else {
       $this->json_response(null, 303);
     }
   }
 }

}

 ?>
