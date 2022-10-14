
<h2> Agregar Artista: </h2>

<form action="add-singer" method="POST" enctype="multipart/form-data" class="my-4">
    <div class="form-floating mb-3">
      <input name="singer" type="text" class="form-control" id="floatingInput" placeholder="Singer" required>
      <label for="floatingInput"><b>Singer:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="nationality" type="text" class="form-control" id="floatingInput" placeholder="Nacionalidad" required>
      <label for="floatingInput"><b>Nacionalidad:</b></label>
    </div>
    <div class="form-floating mb-3">
      <input name="img" type="file" class="form-control" id="floatingInput" placeholder="Foto del artista" >
      <label for="floatingInput"><b>Foto del artista:</b></label>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
