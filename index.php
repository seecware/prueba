<?php

$routes = require __DIR__ . "/routes.php";

$route = rtrim(parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if(array_key_exists($route, $routes[$method])){
    include __DIR__ . '/content/' . $routes[$method][$route];
} else {
    include __DIR__ . "/content/404.php";
}
