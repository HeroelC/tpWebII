<?php

class RecitalesModel
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

  //Funcion para obtener los recitales
  function Get(){

      $sentencia = $this->db->prepare( "SELECT * FROM recital");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

 //Funcion para eliminar recitales
  function Delete($idRecital){

      $sentencia = $this->db->prepare( "DELETE FROM recital where id_recital=?");
      $sentencia->execute(array($idRecital[0]));
    }

  //Funcion para añadir un recital
  function insert($Recital){

    $sentencia = $this->db->prepare("INSERT INTO recital(nombre, precio, estadio_id) VALUES(?,?,?)");
    $sentencia->execute(array($Recital[0], $Recital[1], $Recital[2]));
  }



}

 ?>
