<?php

// ジャズが欲しい

class MainController {

    // -----------------------------------------------------

    public function load_page ( $routes ) {

        $main_route = $routes[0];

        $template_folder = "../private/templates/";

        $allowed_file_requests = array();
        foreach(scandir($template_folder) as $file) if (!in_array($file, ['.', '..', 'debug.php', 'header.php', 'footer.php'])) array_push($allowed_file_requests, explode(".php", $file)[0]);

        $file_uri = $GLOBALS['file_request'];
        $nav_uri = $GLOBALS['nav_request'];

        $requested_main_file = 'page404.php';

        if (in_array($main_route, $allowed_file_requests)) $requested_main_file = $main_route . '.php';

        require_once $template_folder . "header.php";

        require $template_folder . $requested_main_file;

        require_once $template_folder . "footer.php";

    }

    // -----------------------------------------------------

}