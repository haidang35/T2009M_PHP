<?php
    include_once "controllers/WebController.php";
    $route = isset($_GET["route"])?$_GET["route"]:"" ;
    $controller = new WebController();
    switch ($route) {
        case "login":
            $controller->login();
            break;
//        default: $controller->home();
    }