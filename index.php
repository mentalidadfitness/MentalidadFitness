<?php
    session_start();
    require_once 'model/db.model.php';
    require_once 'views/assets/others/archives/random.php';
    if (isset($_REQUEST["c"])) {
        $controller = strtolower($_REQUEST["c"]);
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "mainPage";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        call_user_func(array($controller, $action));
    } else {
        $controller = "views";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        // if(!isset($_SESSION["user"])){
            $controller->mainPage();
        // }else{
        //     $controller->dashboard();
        // }
    }
?>
