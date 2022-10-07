<?php
require_once './app/controllers/song.controller.php';
require_once './app/controllers/singer.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$songController = new SongController();
$singerController = new SingerController();
$authController = new AuthController();

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController->showFormLogin();
        break;
    case 'validate';
        $authController->validateUser();
        break;
    case 'home'; //admin o invitado
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
    case 'delete-song': 
        $songController->deleteSong($params[1]);
        break;
    case 'edit-song':
        $songController->showEditForm($params[1]);
        break;
    case 'song-edit':
        $songController->editSong($params[1]);
        break;
    case 'add-singer':
        $singerController->addSinger();
        break;
    case 'delete-singer': 
        $singerController->deleteSinger($params[1]);
        break;
    case 'edit-singer':
        $singerController->showEditForm($params[1]);
        break;
    case 'singer-edit':
        $singerController->editSinger($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
