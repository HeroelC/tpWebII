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
  function getById($idUsuario){
    $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($idUsuario[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

//Agregar usuario
  function insert($nombre, $clave, $email){
      $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, clave, email) VALUES(?,?,?)");
      $sentencia->execute(array($nombre, $clave, $email));
    }

  //Pedir nombre de usuario a la base de datos, si devuelve el usuario es que existe sino es nulo
  function getName($nombre){
    $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre=? LIMIT 1");
    $sentencia->execute(array($nombre));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function delete($id_usuario){
    $sentencia = $this->db->prepare("DELETE FROM usuario where id_usuario=?");
    $sentencia->execute(array($id_usuario[0]));
  }

  function edit($id_usuario, $admin){
    $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
    $sentencia->execute(array($admin, $id_usuario));
  }

  function lastInsertId(){
    $sentencia = $this->db->prepare("SELECT id_usuario FROM usuario ORDER BY id_usuario  DESC LIMIT 1");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

}


 ?>
