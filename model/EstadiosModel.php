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

//Traemos los estadios
  function Get(){

        $sentencia = $this->db->prepare( "SELECT * FROM estadio");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

//Insertamos un estadio
    function Insert($nombre,$capacidad){

      $sentencia = $this->db->prepare("INSERT INTO estadio(nombre, capacidad) VALUES(?,?,?)");
      $sentencia->execute(array($nombre, $capacidad));
    }

//Eliminamos un estadio
    function Delete($idEstadio){

      $sentencia = $this->db->prepare( "DELETE FROM estadio where id=?");
      $sentencia->execute(array($idEstadio));
    }

}




 ?>
