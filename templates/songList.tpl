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
                <a href='edit/{$song->id}' type='button' class='btn btn-success'><img src='./img/edit.png' alt='edit'></a>
                <a href='delete/{$song->id}' type='button' class='btn btn-danger ml-auto'><img src='./img/delete.png' alt='delete'></a>
            </div>
        </li>
    {/foreach}
</ul>

<br>
{include file="formSong.tpl"}

{include file="footer.tpl"}