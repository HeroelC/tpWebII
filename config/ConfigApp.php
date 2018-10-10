<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NavegacionController#Home',
      'home'=> 'NavegacionController#Home',
      'band' => 'NavegacionController#Band',
      'music'=> 'NavegacionController#Music',
      'tour'=> 'TourController#Tour',
      'signUp' => 'UsuariosController#SignUp',
      'login' => 'LoginController#Login',
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
      'verificarLogin' => 'LoginController#verificarLogin'
    ];

}

 ?>
