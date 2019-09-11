<?php

/*
    The router is just for getting information from the url.
    The index file then uses that information to get the correct files needed for the correct page.
*/

class router {

    // ---------------------------------------------------------------------------------------------------

    function get_routes() {

        // Get base url
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';

        // Get the url minus the base url
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));

        $uri = explode("prototype/", $_SERVER['REQUEST_URI'])[1];

        // Remove the '?' from the url
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));

        // Make url smaller
        $uri = '/' . trim($uri, '/');

        // Create array with all uri routes
        $uri_routes = array();

        // Get all the paths from the url
        $uri_routes = explode('/', $uri);

        // create array for only routes
        $routes = array();

        foreach($uri_routes as $route) {
            if(trim($route))
                array_push($routes, $route);
        }

        if (!count($routes)) array_push($routes, 'home');

        return $routes; // Return routes
    }

    // ---------------------------------------------------------------------------------------------------

}