<?php



$query = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router =  Router::load('router.php');

$router->define(require 'router.php');

require $router->direct($uri);