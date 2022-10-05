<?php
require_once './app/controllers/song.controller.php';
require_once './app/controllers/singer.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'songs'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$songController = new SongController();
$singerController = new SingerController();

// tabla de ruteo
switch ($params[0]) {
    case 'home';
        $songController->showHome();
        break;
    case 'songs':
        $songController->showSong();
        break;
    case 'singers':
        $singerController->showSinger();
        break;
    case 'song':
        $songController->showSongID($params[1]);
        break;
    case 'filter';
        $songController->filterSinger();
        break;
    case 'add-song':
        $songController->addSong();
        break;
    case 'delete': 
        $songController->deleteSong($params[1]);
        break;
    case 'edit-song':
        $songController->editSong($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
