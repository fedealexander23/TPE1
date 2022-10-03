{include file="header.tpl"} 

<br>

<table class="table table-dark table-striped">
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
        </tr>
    {/foreach}
  </tbody>
</table>

{include file="footer.tpl"}