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
          {if $admin}
            <td><a href='edit-singer/{$singer->singer}' type='button' class='btn btn-success'><img src='./img/edit.png' alt='edit'></a></td>
            <td><a href='delete-singer/{$singer->singer}' type='button' class='btn btn-danger ml-auto'><img src='./img/delete.png' alt='delete'></a></td>
          {/if}
        </tr>
    {/foreach}
  </tbody>
</table>
<br>
{if $admin}
{include file="formSinger.tpl"}
{/if}
<br>
{include file="footer.tpl"}