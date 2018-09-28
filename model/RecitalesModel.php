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

  //Funcion para traer los estadios
  function Get(){

        $sentencia = $this->db->prepare( "SELECT * FROM recital");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

  function Delete($idRecital){

      $sentencia = $this->db->prepare( "DELETE FROM recital where id_recital=?");
      $sentencia->execute(array($idRecital[0]));
    }



}

 ?>
