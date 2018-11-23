<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'ComentariosApiController#MostrarComentarios',
      'comentarios#DELETE'=> 'ComentariosApiController#BorrarComentario',
      'comentarios#POST'=> 'ComentariosApiController#InsertarComentario'
    ];

}

 ?>
