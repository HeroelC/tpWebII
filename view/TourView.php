<?php

require_once "./libs/Smarty.class.php";

class TourView
{
  //Atributos
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  ###Panel de administrador###
  function mostrarTablaAdmin($estadios, $recitales, $tabla){

    $this->smarty->assign('Estadios', $estadios);
    $this->smarty->assign('Recitales', $recitales);
    $this->smarty->assign('Tabla', $tabla);

    $this->smarty->display('./templates/tourAdmin.tpl');
  }

  ###Estadios###
  function mostrarEstadios($Estadios){

    $this->smarty->assign('Estadios', $Estadios);

    $this->smarty->display('./templates/estadios.tpl');
  }

  function editarEstadio($Estadio){

    $this->smarty->assign('Estadio', $Estadio);

    $this->smarty->display('./templates/editarEstadio.tpl');
  }

  ###Recitales###
  function mostrarRecitales($Recitales){

    $this->smarty->assign('Recitales', $Recitales);

    $this->smarty->display('./templates/recitales.tpl');
  }

  function editarRecital($Recital, $Estadios, $Imagenes){

    $this->smarty->assign('Recital', $Recital);
    $this->smarty->assign('Estadios', $Estadios);
    $this->smarty->assign('imagenes', $Imagenes);
    $this->smarty->display('./templates/editarRecital.tpl');
  }

}

 ?>
