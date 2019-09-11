<?php

require "../private/includes/router.php";

$router = new router;

$routes = $router->get_routes();

require "../private/controllers/MainController.php";

$controller = new MainController;

$controller->load_page($routes);