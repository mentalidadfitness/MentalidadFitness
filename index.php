<?php
    session_start();
    require_once "views/assets/random/random.php";
    require_once'model/db.model.php';
    if (isset($_REQUEST["c"])) {
        $controller = strtolower($_REQUEST["c"]);
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "mainPage";

        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';

        $controller = new $controller;

        call_user_func(array($controller, $action));
    } else {
        $controller = "access";
        require "controller/$controller.controller.php";

        $controller = ucwords($controller).'Controller';
        $controller = new $controller;

        $controller->mainPage();
    }
    if (isset($_GET["msn"])) {
        echo "<script>alert('".$_GET["msn"]."')</script>";
    }

?>
