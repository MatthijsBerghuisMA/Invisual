<?php

// -------------------------------------------------------------------------------

function getUserIpAddr () {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        // Ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

if (!filter_var(getUserIpAddr(), FILTER_VALIDATE_IP)) {
    echo "incorrect ip address";
    die();
} else {
    $connected_ip = (string)getUserIpAddr();
}

// -------------------------------------------------------------------------------

$date = date("Y d m G i s", time());

$new_user = true;

$json_file = "../private/includes/user_data.json";

$obj = json_decode(file_get_contents($json_file, true));

foreach ($obj->recent_ips as $user) {
    if ($connected_ip == $user->ip) {
        $new_user = false;
        $user->last_seen = $date;
    }
}

if ($new_user) array_push($obj->recent_ips, (object) array("ip" => "$connected_ip", "last_seen" => $date));

file_put_contents($json_file, json_encode($obj));

// ---------------------------------------------------------------------------------

require "../private/includes/router.php";

$router = new router;

$routes = $router->get_routes();

require "../private/controllers/MainController.php";

$controller = new MainController;

// $GLOBALS['uri'] = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
$GLOBALS['public_request'] = 'public/';

$controller->load_page($routes);