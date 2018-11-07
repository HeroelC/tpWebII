{include file="header.tpl"}

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>USERS</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr class="centrarfila warning">
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Admin</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$usuarios item=usuario}
                  {if $smarty.session.User != $usuario['nombre']}
                      {if $usuario['admin'] == 0}
                        <tr class="success centrarfila">
                          <td>{$usuario['nombre']}</td><td>{$usuario['email']}</td><td>No</td><td><a class="btn btn-danger" href="editarUsuario/{$usuario['id_usuario']}">Edit</a></td><td><a class="btn btn-danger" href="eliminarUsuario/{$usuario['id_usuario']}">Delete</a></td>
                        </tr>
                      {else}
                        <tr class="danger centrarfila">
                          <td>{$usuario['nombre']}</td><td>{$usuario['email']}</td><td>Yes</td><td><a class="btn btn-danger" href="editarUsuario/{$usuario['id_usuario']}">Edit</a></td><td><a class="btn btn-danger" href="eliminarUsuario/{$usuario['id_usuario']}">Delete</a></td>
                        </tr>
                      {/if}
                    {/if}
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

{include file="footer.tpl"}
