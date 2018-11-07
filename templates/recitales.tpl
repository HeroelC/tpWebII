<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS</h1>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <table class="table">
            <thead>
              <tr class="centrarfila warning">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">id_Stadium</th>
              </tr>
            </thead>
            <tbody id="tablaTour">
              {foreach from=$Recitales item=recital}

                <tr class="centrarfila">
                <td>{$recital['id_recital']}</td> <td>{$recital['nombre']}</td> <td>{$recital['precio']}</td> <td>{$recital['estadio_id']}</td>
                </tr>

              {/foreach}
            </tbody>
          </table>

        </div>
      </div>
      <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
  </div>

</div>
