<?php

require_once "Api.php";

require_once "../model/ComentariosModel.php";

class ComentariosApiController extends Api
{
  //ATRIBUTOS
  private $ComentariosModel;

  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
  }

//TRAE COMENTARIOS
  function MostrarComentarios($id_recital = null){

    if(isset($id_recital)){
      $comentario = $this->ComentariosModel->getByRecital($id_recital);
    }else{
      $comentario = $this->ComentariosModel->getAll();
    }
    if (isset($comentario)) {
      return $this->json_response($comentario, 200);
    }else {
      return $this->json_response(null, 404);
    }

  }

//ESTA FUNCION VA EN LA API SecuredComentariosApiController

function InsertarComentario(){

    $objetoJson = $this->getJSONData();
    $r = $this->ComentariosModel->insert($objetoJson->mensaje, $objetoJson->puntaje, $objetoJson->id_usuario, $objetoJson->id_recital);

    return $this->json_response($r, 200);
}


}



 ?>
