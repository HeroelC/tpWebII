<?php
/**
 *
 */
class ImagenesModel
{
  //Atributos
  private $db;

  function __construct()
  {
    //Conectamos a la base de datos cuando instanciamos
    $this->db = $this->Connect();
  }

  //Conectarse a la base de datos mediante PDO (PHP DATA OBJECT)
  private function Connect(){

    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

  function insert($url, $id_recital){
    $sentencia = $this->db->prepare("INSERT INTO imagen(url, id_recital) VALUES (?,?)");
    $sentencia->execute(array($url, $id_recital));
  }

  function getByRecital($id_recital){
    $sentencia = $this->db->prepare("SELECT * FROM imagen i, recital r WHERE i.id_recital=r.id_recital and id_recital=?");
    $sentencia->execute(array($id_recital[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}





 ?>
