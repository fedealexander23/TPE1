
<h2> Agregar cancion: </h2>

<form action="add-song" method="POST" class="my-4">
    <div class="form-floating mb-3">
      <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Titulo">
      <label for="floatingInput"><b>Titulo:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="genere" type="text" class="form-control" id="floatingInput" placeholder="Genero">
      <label for="floatingInput"><b>Genero:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="album" type="text" class="form-control" id="floatingInput" placeholder="Album">
      <label for="floatingInput"><b>Album:</b></label>
    </div>
    <div class="form-floating mb-3">  
    <select name="singer" class="form-select" aria-label="Default select example">
        <option selected>- Artista -</option>
        {foreach from=$songs item=$song}
          <option value="{$song->singer}">{$song->singer}</option>
        {/foreach}
      </select>
    </div>  
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
