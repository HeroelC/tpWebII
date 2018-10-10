<?php

define('LOGIN', 'http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/login');

class SecuredController
{

  function __construct(){
    session_start();
    if(isset($_SESSION["User"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)) {
        $this->logout(); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header("Location:".LOGIN);
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location:".LOGIN);
  }

}

 ?>
