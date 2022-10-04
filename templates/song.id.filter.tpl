{include file="header.tpl"}
<br>
<!-- lista de tareas completa por ID -->
<ul class="list-group">
    {foreach from=$songs item=$song}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$song->title}</b> - {$song->singer} - {$song->genere} - {$song->album}</span>
            <div class="ml-auto">
                <a href='songs' type='button' class='btn btn-secondary'>Volver</a>
            </div>
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}