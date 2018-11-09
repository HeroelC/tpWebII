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

  function insert($mensaje, $puntaje, $id_recital, $id_usuario){

    $sentencia = $this->db->prepare("INSERT INTO comentario(mensaje, puntaje, id_estadio, id_usuario) VALUES(?,?,?,?)");
    $setencia->execute(array($mensaje, $puntaje, $recital, $id_usuario));
  }

  function getByRecital($id_recital){

    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_recital = ?");
    $sentencia->execute($id_estadio);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}






 ?>
