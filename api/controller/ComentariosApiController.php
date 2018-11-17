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

// //ESTA FUNCION VA EN LA API SecuredComentariosApiController
//   function InsertarComentario(){
//
//       //FALTA CAMBIAR EL MODELO PARA QUE DEVUELVA UN BOOLEAN
//       $comentarioJSON = $this->getJSONData();
//
//       $response = $this->ComentariosModel->insert($comentarioJSON->mensaje, $comentarioJSON->puntaje,
//       $comentarioJSON->id_usuario, $comentarioJSON->id_recital);
//
//       return $this->json_response($response, 200);
//   }
//
//
//
//   //ESTA FUNCION VA EN LA API SecuredComentariosApiController
//   function BorrarComentario($param = null){
//     // if ($this->Logueado() && $this->esAdmin()) {
//     echo "ENtro";
//      if (count($param) == 1) {
//        $id_comentario = $param[0];
//        $response = $this->ComentariosModel->delete($id_comentario);
//        if ($response == false) {
//          return $this->json_response($response, 300);
//        }else{
//          return $this->json_response($response, 200);
//        }
//      }else {
//        return $this->json_response("No Task Specified", 300);
//      }
//    // }
//   }

}


 ?>
