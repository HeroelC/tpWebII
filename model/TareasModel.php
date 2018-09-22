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


}




 ?>
