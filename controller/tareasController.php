<?php

//Se incluye la vista
require_once "./view/TareasView.php";
//Se incluye el modelo
require_once "./model/TareasModel.php";

class TareasController
{

  //Atributos
  private $view;
  private $model;

  function __construct()
  {
      //Creamos una instancia de la vista
      $this->view = new TareasView();
      //Creamos una instancia del modelo
      $this->model = new TareasModel();
  }

  function Home(){
    $this->view->Home();
  }
}




 ?>
