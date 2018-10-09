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

  function signUp(){

    $this->smarty->display('./templates/signUp.tpl');
  }

  function login(){

    $this->smarty->display('./templates/login.tpl');
  }

}
 ?>
