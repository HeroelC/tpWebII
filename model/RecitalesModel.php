<?php
require_once "ImagenesModel.php";
class RecitalesModel
{

  //Atributos
  private $db;
  private $ImagenesModel;

  function __construct()
  {
    //Conectamos a la base de datos cuando instanciamos
    $this->db = $this->connect();
    $this->ImagenesModel = new ImagenesModel();
  }

  //Conectarse a la base de datos mediante PDO (PHP DATA OBJECT)
  private function connect(){

    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

  //Funcion para obtener todos los recitales, funcionando
  function getAll(){

      $sentencia = $this->db->prepare( "SELECT * FROM recital");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

  //Obtener recitales mediante id
  function getById($idRecital){

      $sentencia = $this->db->prepare( "SELECT * FROM recital WHERE id_recital=?");
      $sentencia->execute(array($idRecital[0]));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

//Obtener tabla con sus respectivos estadios
    function getTable(){

      $setencia = $this->db->prepare("SELECT r.id_recital as id_recital, r.nombre as recital, r.precio, e.nombre as estadio, e.capacidad, e.id_estadio as id_estadio FROM recital r, estadio e WHERE r.estadio_id = e.id_estadio");
      $setencia->execute();
      return $setencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getTableByStadium($id_estadio){

      $setencia = $this->db->prepare("SELECT r.id_recital as id_recital, r.nombre as recital, r.precio, e.nombre as estadio, e.capacidad, e.id_estadio as id_estadio FROM recital r, estadio e WHERE r.estadio_id = e.id_estadio and e.id_estadio = ?");
      $setencia->execute(array($id_estadio[0]));
      return $setencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getConcert($id_recital){

      $setencia = $this->db->prepare("SELECT r.id_recital, r.nombre as recital, r.precio, e.nombre as estadio, e.capacidad FROM recital r, estadio e WHERE r.estadio_id = e.id_estadio and r.id_recital = ?");
      $setencia->execute(array($id_recital[0]));
      return $setencia->fetch(PDO::FETCH_ASSOC);
    }

 //Funcion para eliminar recitales
  function delete($idRecital){

      $sentencia = $this->db->prepare("DELETE FROM recital where id_recital=?");
      $sentencia->execute(array($idRecital[0]));
    }

  //Funcion para añadir un recital
  function insert($nombre, $precio, $idEstadio){

    $sentencia = $this->db->prepare("INSERT INTO recital(nombre, precio, estadio_id) VALUES(?,?,?)");
    $sentencia->execute(array($nombre, $precio, $idEstadio));
  }

  //Consultamos ultimo recital insertado
  function lastInsertId(){
    $sentencia = $this->db->prepare("SELECT id_recital FROM recital ORDER BY id_recital  DESC LIMIT 1");
    $sentencia->execute();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  //funcion para editar un recital
  function edit($nombre, $precio, $idEstadio, $idRecital){

    $sentencia = $this->db->prepare("UPDATE recital SET nombre = ?, precio = ?, estadio_id = ? WHERE id_recital = ?");
    $sentencia->execute(array($nombre, $precio, $idEstadio, $idRecital));
  }

}

 ?>
