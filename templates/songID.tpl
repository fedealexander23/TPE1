{include file="header.tpl"}
<br>
<!-- lista de tareas completa por ID -->
<ul class="list-group">
    {foreach from=$songs item=$song}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$song->title}</b> - {$song->genere} - {$song->album} - <b>{$song->singer}</b> - {$song->nationality}</span>
            <div class="ml-auto">
                <a href='songs' type='button' class='btn btn-secondary'>Volver</a>
            </div>
        </li>
    {/foreach}
</ul>
<br>
{if $song->img}
    <img  style="width: 250px" src="{$song->img}" alt="img/{$song->singer}">
{/if}

{include file="footer.tpl"}