<?php

session_start();

$request_uri = $_SERVER['REQUEST_URI'];

$parsed_url = parse_url($request_uri);

$path = str_replace("/Universal", "", ltrim($parsed_url['path'], '/'));

switch ($path) {
    case '':
        if (!isset($_SESSION["user"])) header("Location: login");
        break;

    case 'login':
        include('./php/login.php');
        break;
        
    case 'validate':
        include('./php/validate.php');
        break;
        
    case '404':
        include('./html/error404.html');
        break;

    default:
        header("Location: 404");
        break;
}
