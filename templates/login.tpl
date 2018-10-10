{include file="header.tpl"}

<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>LOGIN</h1>
      </div>

      <form action="verificarLogin" method="post">

        <div class="form-group">
          <label for="exampleInputUser1">Username</label>
          <input type="text" class="form-control" name="nombre" placeholder="Enter username">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="clave" placeholder="Enter password">
        </div>
        <div>
          {if !empty($message) }
            <div class="alert alert-danger" role="alert">{$message}</div>
          {/if}
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
      </form>
    </div>
    <div class="bordeAbajoNews col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    </div>
  </div>
</div> <!-- Fin container -->
{include file="footer.tpl"}
