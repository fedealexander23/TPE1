{include file="header.tpl"}

<br>
<h2> Editar Artista: </h2>

{foreach from=$singer item=$a}
  <form action="singer-edit/{$a->singer}" method="POST" class="my-4">
      <div class="form-floating mb-3">
        <input value="{$a->singer}" name="singer" type="text" class="form-control" id="floatingInput" placeholder="Singer" required>
        <label for="floatingInput"><b>Singer:</b></label>
      </div>
      <div class="form-floating mb-3">
        <input value="{$a->nationality}" name="nationality" type="text" class="form-control" id="floatingInput" placeholder="Nacionalidad" required>
        <label for="floatingInput"><b>Nacionalidad:</b></label>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Guardar</button>
  </form>
{/foreach}
<br>
{include file="footer.tpl"}