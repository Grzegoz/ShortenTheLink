<?php

$uri = $_SERVER['REQUEST_URI'];
$exploded_uri = explode('/', $uri);
$router_params = [];
foreach($exploded_uri as $value) {
    if (!empty($value)) {
        $router_params[] = $value;
    }
}
if($router_params[0] == "r") {
    include('reduction.php');
    die();
}
if(is_numeric($router_params[0])) {
    include('redirect.php');
    redirect($router_params[0]);
    die();
}
include('index.php');
