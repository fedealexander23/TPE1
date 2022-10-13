<form action="add-song" method="POST" class="my-4">
<label for="Artista..." class="form-label"><b>Agregar cancion:</b></label>
    <div class="form-floating mb-3">
      <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Titulo" required>
      <label for="floatingInput"><b>Titulo:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="genere" type="text" class="form-control" id="floatingInput" placeholder="Genero" required>
      <label for="floatingInput"><b>Genero:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="album" type="text" class="form-control" id="floatingInput" placeholder="Album" required>
      <label for="floatingInput"><b>Album:</b></label>
    </div>
    <div class="form-floating mb-3">  
    <select name="singer" class="form-select" aria-label="Default select example" required>
        <option selected>- Artista -</option>
        {foreach from=$singers item=$singer}
          <option value="{$singer->singer}">{$singer->singer}</option>
        {/foreach}
      </select>
    </div>  
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
