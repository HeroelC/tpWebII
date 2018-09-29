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
    function insert($estadio){

      $sentencia = $this->db->prepare("INSERT INTO estadio(nombre, capacidad) VALUES(?,?)");
      $sentencia->execute(array($estadio[0], $estadio[1]));
    }

//Probada la funcion eliminar, ahora elimina bien.
//Preguntar tema de eliminar cuando esta asociado a otra tabla.
    function Delete($idEstadio){

      $sentencia = $this->db->prepare( "DELETE FROM estadio where id_estadio=?");
      $sentencia->execute(array($idEstadio[0]));
    }



}




 ?>
