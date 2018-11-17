<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'ComentariosApiController#MostrarComentarios',
      'comentarios#DELETE'=> 'SecuredComentariosApiController#BorrarComentario',
      'comentarios#POST'=> 'SecuredComentariosApiController#InsertarComentario'
    ];

}

 ?>
