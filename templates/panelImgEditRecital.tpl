<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>IMAGES</h1>
      </div>
      {foreach from=$imagenes item=imagen}
      <div class = 'noticia col-lg-3 col-md-3 col-sm-3 col-xs-3'>
          <img width="90%" src="{imagen['url']" alt="Image">
      </div>
      {/foreach}
    </div>
    <div class="bordeAbajoNews col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    </div>
  </div>
</div> <!-- Fin container -->
