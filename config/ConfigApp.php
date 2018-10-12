<?php
//Constantes
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('TOUR', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/tourAdmin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/login');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NavegacionController#Home',
      'home'=> 'NavegacionController#Home',
      'band' => 'NavegacionController#Band',
      'music'=> 'NavegacionController#Music',
      'tour'=> 'NavegacionController#Tour',
      'tourAdmin'=> 'TourController#TourAdmin',
      'mostrarEstadio' => 'TourController#mostrarEstadio',
      'eliminarEstadio' => 'TourController#eliminarEstadio',
      'agregarEstadio' => 'TourController#agregarEstadio',
      'editarEstadio' => 'TourController#editarEstadio',
      'actualizarEstadio' => 'TourController#actualizarEstadio',
      'mostrarRecitales' => 'TourController#mostrarRecitales',
      'eliminarRecital' => 'TourController#eliminarRecital',
      'agregarRecital' => 'TourController#agregarRecital',
      'editarRecital' => 'TourController#editarRecital',
      'actualizarRecital' => 'TourController#actualizarRecital',
      'agregarUsuario' => 'UsuariosController#agregar',
      'verificarLogin' => 'LoginController#verificarLogin',
      'signUp' => 'UsuariosController#SignUp',
      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout'
    ];

}

 ?>
