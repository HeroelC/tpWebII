<?php

require_once "Api.php";
require_once "../model/ComentariosModel.php";

class ComentariosApiController extends Api{


  private $ComentariosModel;

  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
  }

  function mostrarComentarios($id_recital = null){

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

}

 ?>
