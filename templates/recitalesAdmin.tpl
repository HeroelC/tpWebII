<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>RECITALS</h1>
      </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">id_Stadium</th>
                <th scope="col">Panel</th>
              </tr>
            </thead>

            <tbody id="tablaTour">
              {foreach from=$Recitales item=recital}

                <tr>
                <td>{$recital['id_recital']}</td> <td>{$recital['nombre']}</td> <td>{$recital['precio']}</td> <td>{$recital['estadio_id']}</td><td><a href=eliminarRecital/{$recital['id_recital']}>Borrar</a></td>
                </tr>

              {/foreach}
            </tbody>
          </table>

          <form action="agregarRecital" method="post">

            <input type="text" placeholder="name" name="nombre" value="">
            <input type="number" placeholder="price" name="precio" value="">

              <select name="id_estadio">
                {foreach from=$Estadios item=estadio}

                  <option value="{$estadio['id_estadio']}">{$estadio['nombre']}</option>

                  {/foreach}
              </select>

            <button type="submit" class="btn-danger" name="button">Cargar</button>

           </form>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>
