<?php

class ComentariosModel
{

  private $db;

  function __construct()
  {
    //Conectamos a la base de datos
    $this->db = $this->Connect();
  }

  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

//Insertar un comentario
  function insert($mensaje, $puntaje, $id_usuario, $id_recital){

    $sentencia = $this->db->prepare("INSERT INTO comentario(mensaje, puntaje, id_usuario, id_recital) VALUES(?,?,?,?)");
    return $sentencia->execute(array($mensaje, $puntaje, $id_usuario, $id_recital));
  }

//Obtener un comentario medinate el id de un recital
  function getByRecital($id_recital){

    $sentencia = $this->db->prepare("SELECT c.*, u.nombre FROM comentario c, usuario u WHERE c.id_recital = ? and c.id_usuario = u.id_usuario");
    $sentencia->execute($id_recital);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Obtener todo los comentarios
  function getAll(){
    $sentencia = $this->db->prepare("SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Eliminar un comentario
  function delete($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    return $sentencia->execute(array($id_comentario));
  }

}
 ?>
