<?php
require 'vendor/autoload.php';

$router = new \App\Router\Router($_GET['url']);

$router->get('/posts', function() {echo 'tous les articles';});
$router->get('/posts/:id', function($id) {echo 'Afficher l\'article' . $id;});
$router->post('/posts/:id', function($id) {echo 'Poster l\'article' . $id;});

$router->run();