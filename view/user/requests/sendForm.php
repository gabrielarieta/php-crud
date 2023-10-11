<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/controller/UserController.php";

    $userController = new UserController();

    $userController->createOrUpdate($_POST);