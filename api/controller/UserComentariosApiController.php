<?php

require_once "Api.php";
require_once "../model/ComentariosModel.php";
require_once "../controller/SecuredController.php";


class UserComentariosApiController extends Api, SecuredController
{

  function __construct()
  {
    parent::_construct();
    parent::_construct();
  }

  function InsertarComentario($id_recital){
    $mensaje = $_POST['mensaje'];
    $puntaje = $_POST['puntaje'];

    if(isset($_SESSION['User'])){
      if ((isset($mensaje))&&(isset($puntaje))) {
        $this->ComentariosModel->insert($mensaje, $puntaje, $id_usuario, $id_recital);
      }else{
        $this->json_response(null, 300);
        }
    }
  }


}


 ?>
