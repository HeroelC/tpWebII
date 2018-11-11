{include file="header.tpl"}

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUM</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <form class="centrarfila" action="actualizarEstadio/{$Estadio[0]['id_estadio']}" method="post">
                <input type="text" placeholder="{$Estadio[0]['nombre']}" name="nombre" value="{$Estadio[0]['nombre']}" />
                <input type="number" placeholder="{$Estadio[0]['capacidad']}" name="capacidad" value="{$Estadio[0]['capacidad']}" />
                <button type="submit" class="btn-danger" name="button">Guardar</button>
            </form>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a class="back" href="tourAdmin"> < BACK </a>
        </div>
      </div>
    </div>
  </div>

{include file="footer.tpl"}
