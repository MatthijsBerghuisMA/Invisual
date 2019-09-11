<?php

require "../private/includes/router.php";

$router = new router;

$routes = $router->get_routes();

require "../private/controllers/MainController.php";

$controller = new MainController;

// $GLOBALS['uri'] = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
$GLOBALS['public_request'] = 'public/';

$controller->load_page($routes);