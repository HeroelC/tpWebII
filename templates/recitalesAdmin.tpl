<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS ADMIN</h1>
      </div>
          <table class="table">
            <thead>
              <tr class="centrarfila warning">
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="tablaTour">
              {foreach from=$Recitales item=recital}

                <tr class="centrarfila">
                  <td>{$recital['nombre']}</td> <td>{$recital['precio']}</td><td><a class="btn btn-danger" href="editarRecital/{$recital['id_recital']}">Editar</a></td><td><a class="btn btn-danger" href="eliminarRecital/{$recital['id_recital']}">Borrar</a></td>
                </tr>
              {/foreach}
            </tbody>
          </table>

          <form enctype="multipart/form-data" class="centrarfila" action="agregarRecital" method="post">

            <input type="text" placeholder="name" name="nombre" value="">
            <input type="number" placeholder="price" name="precio" value="">

              <select name="id_estadio">
                {foreach from=$Estadios item=estadio}

                  <option value="{$estadio['id_estadio']}">{$estadio['nombre']}</option>

                  {/foreach}
              </select>


              <input type="file" id="imagenes" name="imagenes[]" multiple>

              <button type="submit" class="btn btn-danger" name="button">Cargar</button>


           </form>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>
