<?php
require 'vendor/autoload.php';

$router = new \App\Router\Router($_GET['url']);

$router->get('/', function () {
	(new \App\Controller\HomepageController)->render();
});
$router->get('/error', function () {
	(new \App\Controller\Error404Controller())->render();
});
$router->get('/character/:name', function ($name) {
	(new \App\Controller\Pages\CharacterBuildController())->render($name);
});
$router->get('/character', function () {
	(new \App\Controller\Pages\CharacterController())->render();
});

$router->run();