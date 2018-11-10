<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'ComentariosApiController#mostrarComentarios',
      'tarea#DELETE'=> 'TareasApiController#DeleteTarea',
      'comentarios#POST'=> 'UserComentariosApiController#InsertarComentario',
      'tarea#PUT'=> 'TareasApiController#UpdateTarea'
    ];

}

 ?>
