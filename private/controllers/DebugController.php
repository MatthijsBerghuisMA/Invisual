<?php

class DebugController {

    // -----------------------------------------------------

    public function load_page () {

        // $passw = 'ikjh8*i0)';
        $passw = 'password1';
        var_dump($_POST);

        if (isset($_POST['debug_submit']) && isset($_POST['debug_passw'])) {
            if ($_POST['debug_passw'] === $passw) {
                $_SESSION['debug-ssid'] = 'ebb3b395-c8bf-41a9-bcac-7aed5017f5c8';
                header("location: ./");
            }
        }

        $file_uri = $GLOBALS['file_request'];
        $nav_uri = $GLOBALS['nav_request'];

        $template_folder = "../private/templates/";

        require $template_folder . "debug.php";

    }

    // -----------------------------------------------------

}