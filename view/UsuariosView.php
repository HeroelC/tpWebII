<?php
require_once "./libs/smarty.class.php";

class UsuariosView
{

  //Atributos
  private $smarty;

  function __construct()
  {

    $this->smarty = new Smarty();
  }

  function signUp($message = ''){
    
    $this->smarty->assign('message', $message);
    $this->smarty->display('./templates/signUp.tpl');
  }

  function login($message = ''){

    $this->smarty->assign('message', $message);
    $this->smarty->display('./templates/login.tpl');
  }

}
 ?>
