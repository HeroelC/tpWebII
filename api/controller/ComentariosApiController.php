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

  //Traer comentarios
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

}


 ?>
