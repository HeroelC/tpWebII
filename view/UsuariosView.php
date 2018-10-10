<?php
require_once "./libs/smarty.class.php";

class UsuariosView
{

  private $smarty;
  
  function __construct()
  {

    $this->smarty = new Smarty();
  }

  function signUp($message = ''){

    $this->smarty->assign('message', $message);
    $this->smarty->display('./templates/signUp.tpl');
  }



}
 ?>
