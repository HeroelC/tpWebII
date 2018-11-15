<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUMS ADMIN</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table centrarfila">
              <thead>
                <tr class="warning">
                  <th scope="col">Name</th>
                  <th scope="col">Capacity</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$Estadios item=estadio}

                <tr>
                  <td>{$estadio['nombre']}</td><td>{$estadio['capacidad']}</td><td><a class="btn btn-danger" href="editarEstadio/{$estadio['id_estadio']}">Editar</a></td><td><a class="btn btn-danger" href="eliminarEstadio/{$estadio['id_estadio']}">Borrar</a></td>
                </tr>

                {/foreach}
              </tbody>
            </table>

            <form class="centrarfila" action="agregarEstadio" method="post">
                <input type="text" placeholder="name" name="nombre" value="">
                <input type="number" placeholder="capacity" name="capacidad" value="">
                <button type="submit" class="btn-danger" name="button">Cargar</button>
            </form>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
  </div>
