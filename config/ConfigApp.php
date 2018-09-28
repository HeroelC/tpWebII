<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TareasController#Home',
      'home'=> 'TareasController#Home',
      'music'=> 'TareasController#Music',
      'tour'=> 'TareasController#Tour',
      'eliminarEstadio' => 'EstadiosController#EliminarEstadio',
      'agregarEstadio' => 'EstadiosController#AgregarEstadio',
      'mostrarRecitales' => 'RecitalesController#MostrarRecitales',
      'eliminarRecital' => 'RecitalesController#EliminarRecital',
      'agregarRecital' => 'RecitalesController#AgregarRecital'
    ];

}

 ?>
