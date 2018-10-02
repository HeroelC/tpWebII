<?php

require_once "./libs/Smarty.class.php";

class RecitalesView
{

  function __construct()
  {


  }

  function Mostrar($Recitales){

    $smarty = new Smarty();

    $smarty->assign('Recitales', $Recitales);

    $smarty->display('./templates/recitales.tpl');
  }

}


 ?>
