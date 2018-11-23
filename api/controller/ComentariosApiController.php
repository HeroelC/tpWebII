<?php

require_once "Api.php";
require_once "../model/ComentariosModel.php";
require_once "../model/UsuariosModel.php";

class ComentariosApiController extends Api
{
  //ATRIBUTOS
  private $ComentariosModel;
  private $UsuariosModel;

  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuariosModel = new UsuariosModel();
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
  function InsertarComentario(){

      $comentarioJSON = $this->getJSONData();

      $response = $this->ComentariosModel->insert($comentarioJSON->mensaje,
      $comentarioJSON->puntaje, $comentarioJSON->id_usuario, $comentarioJSON->id_recital);

      if($response){
        return $this->json_response($response, 200);
      }else{
        return $this->json_response($response, 300);
      }

  }

  //Borrar un comentario (solo administrador)
  function BorrarComentario($param = null)
  {
    if(isset($param)){
        if (count($param) == 1){
        $id_comentario = $param[0];
        $response = $this->ComentariosModel->delete($id_comentario);
            if($response){
              return $this->json_response($response, 200);
            }else{
              return $this->json_response($response, 300);
            }
        }
    }else{
       return $this->json_response("No task specified", 300);
     }
  }

}


 ?>
