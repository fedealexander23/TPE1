{include file="header.tpl"}

<br>

<h2> Editar cancion: </h2>

{foreach from=$song item=$a}
  <form action="song-edit/{$a->id}" method="POST" class="my-4">
      <div class="form-floating mb-3">
        <input value="{$a->title}" name="title" type="text" class="form-control" id="floatingInput" placeholder="Titulo" required>
        <label for="floatingInput"><b>Titulo:</b></label>
      </div>
      <div class="form-floating mb-3">
        <input value="{$a->genere}" name="genere" type="text" class="form-control" id="floatingInput" placeholder="Genero" required>
        <label for="floatingInput"><b>Genero:</b></label>
      </div>
      <div class="form-floating mb-3">
        <input value="{$a->album}" name="album" type="text" class="form-control" id="floatingInput" placeholder="Album" required>
        <label for="floatingInput"><b>Album:</b></label>
      </div>
      <div class="form-floating mb-3">
        <input value="{$a->singer}" name="singer" type="text" class="form-control" id="floatingInput" placeholder="Artista" required>
        <label for="floatingInput"><b>Artista:</b></label>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Guardar</button>
  </form>
{/foreach}
<br>

{include file="footer.tpl"}