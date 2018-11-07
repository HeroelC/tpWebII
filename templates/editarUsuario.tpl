{include file="header.tpl"}

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>USER</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr class="centrarfila warning">
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Admin</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$usuario item=user}
                  {if $smarty.session.User != $user['nombre']}
                    {if $user['admin'] == 0}
                    <form action="guardarUsuario/{$user['id_usuario']}" method="post">
                      <tr class="centrarfila">
                        <td>{$user['nombre']}</td><td>{$user['email']}</td>
                        <td><select class="form-control form-control-lg" name="admin">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select></td>
                        <td><button type="submit" class="btn-danger" name="button">Save</button></td>
                      </tr>
                    </form>
                    {else}
                    <form action="guardarUsuario/{$user['id_usuario']}" method="post">
                      <tr class="centrarfila">
                        <td>{$user['nombre']}</td><td>{$user['email']}</td>
                        <td><select class="form-control form-control-lg" name="admin">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select></td>
                        <td><button type="submit" class="btn-danger" name="button">Save</button></td>
                      </tr>
                    </form>
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
