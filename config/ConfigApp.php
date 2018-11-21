<?php

//CONSTANTES
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/home');
define('TOUR', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/tour');
define('TOURADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/tourAdmin');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');
define('USUARIOS', 'Location: http://'.$_SERVER["SERVER_NAME"]. ':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/usuarios');



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
      'detalleRecital'=> 'NavegacionController#detalleRecital',
      'Estadio'=> 'NavegacionController#Estadio',
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
      'eliminarImagen' => 'TourController#eliminarImagen',
      'agregarUsuario' => 'UsuariosController#agregar',
      'verificarLogin' => 'LoginController#verificarLogin',
      'signUp' => 'UsuariosController#SignUp',
      'login' => 'LoginController#login',
      'logout' => 'LoginController#logout',
      'usuarios' => 'UsuariosAdminController#mostrarUsuarios',
      'eliminarUsuario' => 'UsuariosAdminController#eliminarUsuario',
      'editarUsuario' => 'UsuariosAdminController#editarUsuario',
      'guardarUsuario' => 'UsuariosAdminController#guardarUsuario'
    ];

}

 ?>
