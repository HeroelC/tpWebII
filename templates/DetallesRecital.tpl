{include file="header.tpl"}

<input type="input" hidden="hidden" id="id_recital" value="{$fila['id_recital']}">

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>DETAILS</h1>
      </div>
      <table class="table">
        <thead>
          <tr class="centrarfila warning">
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stadium</th>
            <th scope="col">Capacity</th>
          </tr>
        </thead>
        <tbody id="tablaTour">
          <tr class="centrarfila">
            <td>{$fila['recital']}</td><td>{$fila['precio']}</td><td>{$fila['estadio']}</td><td>{$fila['capacidad']}</td>
          </tr>
        </tbody>
      </table>

      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a class="back" href="tour"> < BACK </a>
      </div>
    </div>
  </div>
  {if !empty($imagenes)}
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>IMAGES</h1>
      </div>
        <div class="row">

            {include file="slideImg.tpl"}

        </div>
      <div class="row">
        <figure class="col-lg-6 col-md-10 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-1 col-sm-offset-1">

        </figure>
      </div>
      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
  </div>
  {/if}

    {include file="comentarios.tpl"}

</div>

{include file="footer.tpl"}
