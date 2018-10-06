<?php

require_once "./libs/Smarty.class.php";

class TourView
{

  function __construct()
  {

  }

  ###Panel de administrador###
  function mostrarTablaAdmin($estadios, $recitales, $tabla){

    $smarty = new Smarty();

    $smarty->assign('Estadios', $estadios);
    $smarty->assign('Recitales', $recitales);
    $smarty->assign('Tabla', $tabla);

    $smarty->display('./templates/tourAdmin.tpl');
  }

  ###Estadios###
  function mostrarEstadios($Estadios){

    $smarty = new Smarty();

    $smarty->assign('Estadios', $Estadios);

    $smarty->display('./templates/estadios.tpl');
  }

  function editarEstadio($Estadio){

    $smarty = new Smarty();

    $smarty->assign('Estadio', $Estadio);

    $smarty->display('./templates/editarEstadio.tpl');
  }

  ###Recitales###
  function mostrarRecitales($Recitales){

    $smarty = new Smarty();

    $smarty->assign('Recitales', $Recitales);

    $smarty->display('./templates/recitales.tpl');
  }

  function editarRecital($Recital, $Estadios){

    $smarty = new Smarty();

    $smarty->assign('Recital', $Recital);
    $smarty->assign('Estadios', $Estadios);

    $smarty->display('./templates/editarRecital.tpl');
  }

}

 ?>
