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


}
 ?>
