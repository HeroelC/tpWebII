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
  function getAll(){

    $sentencia = $this->db->prepare( "SELECT * FROM usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Obtener usuario mediante ID
  function getId($idUsuario){

    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($idUsuario[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Obtener usuario

//Agregar usuario
  function insert($nombre, $clave, $email){

      $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, clave, email) VALUES(?,?,?)");
      $sentencia->execute(array($nombre, $clave, $email));
    }
}


 ?>