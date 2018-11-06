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

  function getAllUser($usuarios){

    $this->smarty->assign('usuarios', $usuarios);
    $this->smarty->display('./templates/usuarios.tpl');
  }

  function editarUsuario($usuario){

    $this->smarty->assign('usuario', $usuario);
    $this->smarty->display('./templates/editarUsuario.tpl');
  }

}
 ?>
