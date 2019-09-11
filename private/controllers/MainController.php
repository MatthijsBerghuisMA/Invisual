<?php

// ジャズが欲しい

class MainController {

    // -----------------------------------------------------

    public function load_page ( $routes ) {

        $main_route = $routes[0];

        $template_folder = "../private/templates/";

        $allowed_file_requests = array();
        foreach(scandir($template_folder) as $file) if (!in_array($file, ['.', '..'])) array_push($allowed_file_requests, explode(".php", $file)[0]);

        $uri = $GLOBALS['public_request'];

        include $template_folder . "header.php";

        include $template_folder . "footer.php";

    }

    // -----------------------------------------------------

}