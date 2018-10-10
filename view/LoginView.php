<?php
require_once "./libs/smarty.class.php";

class LoginView
{
  //Atributos
  private $smarty;

  function __construct()
  {

    $this->smarty = new Smarty();
  }

  function login($message = ''){

    $this->smarty->assign('message', $message);
    $this->smarty->display('./templates/login.tpl');
  }

}

 ?>
