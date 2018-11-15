<?php

class EstadiosModel
{

  //Atributos
  private $db;

  function __construct()
  {

    //Conectamos a la base de datos
    $this->db = $this->connect();
  }

  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

//Obtenemos todo los estadios, funcionando.
  function getAll(){
      $sentencia = $this->db->prepare( "SELECT * FROM estadio");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

//Obtener un estadio en especifico por id getById()
  function getById($idEstadio){
    $sentencia = $this->db->prepare( "SELECT * FROM estadio WHERE id_estadio=?");
    $sentencia->execute(array($idEstadio[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Insertamos un estadio, probado funcionando
    function insert($nombre, $capacidad){
      $sentencia = $this->db->prepare("INSERT INTO estadio(nombre, capacidad) VALUES(?,?)");
      $sentencia->execute(array($nombre, $capacidad));
    }

//Eliminar estadio
    function delete($idEstadio){
      $sentencia = $this->db->prepare( "DELETE FROM estadio where id_estadio=?");
      $sentencia->execute(array($idEstadio[0]));
    }

//Editar estadio, probada funcionando
    function edit($nombre, $capacidad, $idEstadio){
      $sentencia = $this->db->prepare( "UPDATE estadio SET nombre = ?, capacidad = ? where id_estadio=?");
      $sentencia->execute(array($nombre, $capacidad, $idEstadio));
    }

}

 ?>
