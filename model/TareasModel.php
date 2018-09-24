<?php


class TareasModel
{

  //Atributos
  private $db;

  function __construct()
  {
    //Conectamos a la base de datos
    $this->db = $this->Connect();
  }

  //dbname cambiar por la tabla que usemos(falta terminar de acomodar nuestra DB)
  private function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_rolling;charset=utf8'
    , 'root', '');
  }

  function GetTareas(){

        $sentencia = $this->db->prepare( "select * from tarea");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarTarea($titulo,$descripcion,$completada){

      $sentencia = $this->db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
      $sentencia->execute(array($titulo,$descripcion,$completada));
    }

    function BorrarTarea($idTarea){

      $sentencia = $this->db->prepare( "delete from tarea where id=?");
      $sentencia->execute(array($idTarea));
    }

}




 ?>
