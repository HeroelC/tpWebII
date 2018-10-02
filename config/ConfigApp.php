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
      'tour'=> 'TareasController#Tour',
      'eliminarEstadio' => 'EstadiosController#EliminarEstadio',
      'agregarEstadio' => 'EstadiosController#agregarEstadio',
      'editarEstadio' => 'EstadiosController#editarEstadio',
      'mostrarRecitales' => 'RecitalesController#MostrarRecitales',
      'eliminarRecital' => 'RecitalesController#EliminarRecital',
      'agregarRecital' => 'RecitalesController#AgregarRecital'
    ];

}

 ?>
