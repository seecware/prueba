<?php
// Carga la configuración de rutas
$routes = require __DIR__ . "/routes.php";

// Debug (ahora sí después de cargar)



// Obtiene ruta y método HTTP
$route  = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];


// Determina la vista y valores para el layout
if (isset($routes[$method][$route])) {
    $view      = $routes[$method][$route];
    $active    = pathinfo($view, PATHINFO_FILENAME);
    $pageTitle = ucfirst($active) . ' - Punto de Venta';
} else {
    $view      = '404.php';
    $active    = '';
    $pageTitle = 'Página No Encontrada';
}

// Incluye partials y vista
include __DIR__ . '/content/partials/head.php';
include __DIR__ . '/content/partials/navvar.php';
include __DIR__ . '/content/' . $view;
include __DIR__ . '/content/partials/footer.php';
