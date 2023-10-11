<?php    
    require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorUserController.php";

    $colorUserController = new ColorUserController();

    $colorUserController->delete($_POST['id']);