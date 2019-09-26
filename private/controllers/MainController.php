<?php

// ジャズが欲しい

class MainController {

    // -----------------------------------------------------

    public function load_page ( $routes ) {

        // ----------------------------------------------------- Send email from contact is true

		if (isset($_POST['contact_submit'])) {

            $all_posts_exist = true;
    		foreach (['name', 'subject', 'email', 'message'] as $post) if (!isset($post)) $all_posts_exist = false;


            if ($all_posts_exist) {
                $name = filter_var($_POST['name'] , FILTER_SANITIZE_STRING);
                $subject = filter_var($_POST['subject'] , FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

                // $to = "berghuismatthijs@gmail.com";
                $to = "wieberan@hotmail.nl";
                //$headers = "From: $email" . "\r\n" .
                "CC: wieberan@hotmail.nl";
                $txt = $email."\n\nJe hebt een mailtje ontvangen van ".$name.".\n\n".$email.".\n\n".$message;

                mail($to, $subject, $txt);
            }
        }

        // -----------------------------------------------------

        $main_route = $routes[0];

        $template_folder = "../private/templates/";

        $allowed_file_requests = array();
        foreach(scandir($template_folder) as $file) if (!in_array($file, ['.', '..', 'debug.php', 'header.php', 'footer.php'])) array_push($allowed_file_requests, explode(".php", $file)[0]);

        $file_uri = $GLOBALS['file_request'];
        $nav_uri = $GLOBALS['nav_request'];

        $requested_main_file = 'page404.php';

        if (in_array($main_route, $allowed_file_requests)) $requested_main_file = $main_route . '.php';

        include $template_folder . "header.php";

        include $template_folder . $requested_main_file;

        include $template_folder . "footer.php";

    }

    // -----------------------------------------------------

}