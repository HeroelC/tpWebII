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
      'login' => 'UsuariosController#Login',
      'mostrarEstadio' => 'TourController#mostrarEstadio',
      'eliminarEstadio' => 'TourController#eliminarEstadio',
      'agregarEstadio' => 'TourController#agregarEstadio',
      'editarEstadio' => 'TourController#editarEstadio',
      'mostrarRecitales' => 'TourController#mostrarRecitales',
      'eliminarRecital' => 'TourController#eliminarRecital',
      'agregarRecital' => 'TourController#agregarRecital',
      'agregarUsuario' => 'UsuariosController#agregar'
    ];

}

 ?>
