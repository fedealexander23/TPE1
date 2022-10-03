{include file="header.tpl"}

<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$songs item=$song}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$song->title}</b> - {$song->genere} - {$song->album} - {$song->singer}</span>
        </li>
    {/foreach}
</ul>

<p class="mt-3"><small>Mostrando {$count} tareas</small></p>

{include file="footer.tpl"}