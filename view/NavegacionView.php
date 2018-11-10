<?php

include_once "./libs/smarty.class.php";

class NavegacionView
{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function Home(){

    $this->smarty->display('templates/home.tpl');
  }

  function Band(){

    $this->smarty->display('templates/band.tpl');
  }

  function Tour($Tabla){

    $this->smarty->assign('Tabla', $Tabla);
    $this->smarty->display('templates/tour.tpl');
  }

  function Music(){

    $this->smarty->display('templates/music.tpl');
  }

  function detalleRecital($Fila, $imagenes){

    $this->smarty->assign('fila', $Fila);
    $this->smarty->assign('imagenes', $imagenes);
    $this->smarty->display('templates/DetallesRecital.tpl');
  }

}


 ?>
