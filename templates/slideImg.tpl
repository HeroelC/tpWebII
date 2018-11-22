{foreach from=$imagenes item=imagen}
<figure class= "noticia col-lg-3 col-md-3 col-sm-3 col-xs-3 linkImg">
    <img class="imgDetalleRecital" width="90%" height="200px" src="{$imagen['url']}" alt="Image">
</figure>
{/foreach}
