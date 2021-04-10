<?php
use core\Router;
use src\controllers\HomeController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/AdicionarUsuario', 'UsuariosController@add');
$router->post('/AdicionarUsuario', 'UsuariosController@addAction'); 