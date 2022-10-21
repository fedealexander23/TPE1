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

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate';
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'songs':
        $songController = new SongController();
        $songController->showSong();
        break;
    case 'singers':
        $singerController = new SingerController();
        $singerController->showSinger();
        break;
    case 'song':
        $songController = new SongController();
        $songController->showSongID($params[1]);
        break;
    case 'filter';
        $songController = new SongController();
        $songController->filterSinger();
        break;
    case 'add-song':
        $songController = new SongController();
        $songController->addSong();
        break;
    case 'delete-song': 
        $songController = new SongController();
        $songController->deleteSong($params[1]);
        break;
    case 'edit-song':
        $songController = new SongController();
        $songController->showEditForm($params[1]);
        break;
    case 'song-edit':
        $songController = new SongController();
        $songController->editSong($params[1]);
        break;
    case 'add-singer':
        $singerController = new SingerController();
        $singerController->addSinger();
        break;
    case 'delete-singer':
        $singerController = new SingerController(); 
        $singerController->deleteSinger($params[1]);
        break;
    case 'edit-singer':
        $singerController = new SingerController();
        $singerController->showEditForm($params[1]);
        break;
    case 'singer-edit':
        $singerController = new SingerController();
        $singerController->editSinger($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
