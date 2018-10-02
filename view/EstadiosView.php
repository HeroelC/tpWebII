<?php

require_once "./libs/Smarty.class.php";

class EstadiosView
{

  function __construct()
  {

  }

  function Mostrar($Estadios){

    $smarty = new Smarty();

    $smarty->assign('Estadios', $Estadios);

    $smarty->display('./templates/estadios.tpl');

  }

}



 ?>
