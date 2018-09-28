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
      'eliminarEstadio' => 'TareasController#EliminarEstadio',
      'agregarEstadio' => 'TareasController#AgregarEstadio',
      'mostrarRecitales' => 'TareasController#MostrarRecitales'
    ];

}

 ?>
