{include file="header.tpl"}

<br>

{include file="formfilter.tpl"} 

<br>
<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$songs item=$song}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$song->title}</b> - {$song->singer}</span>
            <div class="ml-auto">
                <a href='song/{$song->id}' type='button' class='btn btn-secondary'>Ver ficha completa</a>
                <a href='finalize/{$song->id}' type='button' class='btn btn-success'>Finalizar</a>
                <a href='delete/{$song->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} tareas</small></p>

{include file="footer.tpl"}