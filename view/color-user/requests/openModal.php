<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/controller/UserController.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorController.php";

    $colorController = new ColorController();
    $userController = new UserController();

    $users = $userController->listAll();
    $colors = $colorController->listAll();

?>
    <div>
        <div>
            <h2>
                Form para Adicionar/Editar
            </h2>
        </div>
        <div class="form-group">
            <label class="form-label" for="user">Usuário:</label><br>
            <select class="form-select" name="user" id="user">
                <?php
                    foreach($users as $user) {
                        echo sprintf("
                            <option %s value=%s> %s </option>", $_REQUEST['userId'] == $user->id ? 'selected' : '',
                        $user->id, $user->name);
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-input" for="color">Color:</label><br>
            <select class="form-select" name="color" id="color">
                <?php
                    foreach($colors as $color) {
                        echo sprintf("
                            <option %s value=%s> %s </option>
                        ", $_REQUEST['colorId'] == $color->id ? 'selected' : '',
                        $color->id, $color->name);
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <a class="form-btn" onclick="sendForm('<?php echo $_REQUEST['id'] ?>')" rel="modal:close">Enviar</a>
        </div>
    </div>