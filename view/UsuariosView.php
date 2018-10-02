<?php
require_once "./libs/smarty.class.php";

class UsuariosView
{


  function __construct()
  {

  }

  function signUp(){

    $smarty = new Smarty();

    $smarty->display('./templates/signUp.tpl');
  }

  function login(){

    $smarty = new Smarty();

    $smarty->display('./templates/login.tpl');
  }

  function tour($estadios, $recitales){

    $smarty = new Smarty();

    $smarty->assign('Estadios', $estadios);
    $smarty->assign('Recitales', $recitales);

    $smarty->display('./templates/tour.tpl');

  }

}
 ?>
