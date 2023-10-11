<?php    
    require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorController.php";

    $colorController = new ColorController();

    $colorController->delete($_POST['id']);