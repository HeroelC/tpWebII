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

  function insert($mensaje, $puntaje, $id_estadio, $id_usuario){

    $sentencia = $this->db->prepare("INSERT INTO comentario(mensaje, puntaje, id_estadio, id_usuario) VALUES(?,?,?,?)");
    $setencia->execute(array($mensaje, $puntaje, $id_estadio, $id_usuario));
  }

  function get($id_estadio){

    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_estadio = ?");
    $sentencia->execute($id_estadio);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}






 ?>
