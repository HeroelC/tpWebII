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
      'tour'=> 'UsuariosController#Tour',
      'signUp' => 'UsuariosController#SignUp',
      'login' => 'UsuariosController#Login',
      'mostrarEstadio' => 'EstadiosController#mostrar',
      'eliminarEstadio' => 'EstadiosController#eliminar',
      'agregarEstadio' => 'EstadiosController#agregar',
      'editarEstadio' => 'EstadiosController#editar',
      'mostrarRecitales' => 'RecitalesController#mostrar',
      'eliminarRecital' => 'RecitalesController#eliminar',
      'agregarRecital' => 'RecitalesController#agregar',
      'agregarUsuario' => 'UsuariosController#agregar'
    ];

}

 ?>
