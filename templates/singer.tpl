{include file="header.tpl"} 

<br>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Artista</th>
      <th scope="col">Nacionalidad</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$singers item=$singer}
        <tr>
          <td>{$singer->singer}</td>
          <td>{$singer->nationality}</td>
          <td><a href='edit-singer/{$singer->singer}' type='button' class='btn btn-success'><img src='./img/edit.png' alt='edit'></a></td>
          <td><a href='delete-singer/{$singer->singer}' type='button' class='btn btn-danger ml-auto'><img src='./img/delete.png' alt='delete'></a></td>
        </tr>
    {/foreach}
  </tbody>
</table>
<br>

{include file="formSinger.tpl"}

<br>
{include file="footer.tpl"}