<?php

require_once "./libs/Smarty.class.php";

class TourView
{

  function __construct()
  {

  }

  function test($Tabla){
    print_r($Tabla);
    echo 'Acá va una posicion del arreglo <br>';


    foreach ($Tabla as $fila) {
      echo $fila['recital'].' '.$fila['estadio'];
    }
  }

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

  ###Recitales###
  function mostrarRecitales($Recitales){

    $smarty = new Smarty();

    $smarty->assign('Recitales', $Recitales);

    $smarty->display('./templates/recitales.tpl');
  }

}

 ?>
