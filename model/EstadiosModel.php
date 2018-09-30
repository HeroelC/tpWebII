<?php

class EstadiosModel
{

  //Atributos
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

//Obtenemos todo los estadios
  function getAll(){

      $sentencia = $this->db->prepare( "SELECT * FROM estadio");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

//Obtener un estadio en especifico por id
  function getId($idEstadio){

    $sentencia = $this->db->prepare( "SELECT * FROM estadio WHERE id_estadio=?");
    $sentencia->execute(array($idEstadio));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Insertamos un estadio
    function insert($nombre, $capacidad){

      $sentencia = $this->db->prepare("INSERT INTO estadio(nombre, capacidad) VALUES(?,?)");
      $sentencia->execute(array($nombre, $capacidad));
    }

//Probada la funcion eliminar, ahora elimina bien.
//Preguntar tema de eliminar cuando esta asociado a otra tabla.
    function delete($idEstadio){

      $sentencia = $this->db->prepare( "DELETE FROM estadio where id_estadio=?");
      $sentencia->execute(array($idEstadio[0]));
    }



}




 ?>
