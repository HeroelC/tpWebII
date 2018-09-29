<?php

class UsuariosModel
{

  private $db;

  function __construct()
  {
    $this->db = $this->connect();
  }

//Conectarse a la base de datos
  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

//Obtener los usuarios
  function get(){

    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Agregar usuario
  function insert($nombre, $pass){

      $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, clave, email) VALUES(?,?)");
      $sentencia->execute(array($nombre, $pass));
    }


}


 ?>
