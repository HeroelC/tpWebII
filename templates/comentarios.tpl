<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <div class="bordeArribaNews">
      <h1>COMMENTS</h1>
    </div>
      <section class="comentarios">

      </section>
    <div class="bordeAbajoNews">

    </div>
  {if (isset($smarty.session.User))}
  <input type="input" hidden="hidden" class="idUsuario" data="{$smarty.session.idUsuario}">
  {if $smarty.session.admin == 1}
  <input type="input" hidden="hidden" class="admin" data="admin">
  {else}
  <input type="input" hidden="hidden" class="admin" data="noAdmin">
  {/if}
  <div class="bordeArribaNews">
    <h1>COMMENT</h1>
  </div>
  <form>
    <div class="form-group">
      <textarea class="form-control" id="texto" rows="5" placeholder="Comment Here"></textarea>
    </div>
  </form>
  <div class="form-group">
    <label for="puntaje">Score</label>
    <select class="form-control" id="puntaje">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="button" class="btn btn-danger" id="comment" name="comment">Send</button>
  <div class="bordeAbajoNews">
  </div>
  {/if}
</div>
