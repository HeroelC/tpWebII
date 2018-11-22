{if !empty($imagenes)}
<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>IMAGES</h1>
      </div>
      {foreach from=$imagenes item=imagen}
      <figure class= "noticia col-lg-3 col-md-3 col-sm-3 col-xs-3 linkImg">
          <img width="90%" height="200px" src="{$imagen['url']}" alt="Image">
          <figcaption>
          <a class="btn btn-danger link" href="eliminarImagen/{$imagen['id_imagen']}">Delete</a>
         </figcaption>
      </figure>

      {/foreach}
      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
  </div>
</div> <!-- Fin container -->
{/if}
