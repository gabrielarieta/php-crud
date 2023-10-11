<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/controller/UserController.php";

    $userController = new UserController();

    if($_REQUEST['id']) {
        $values = $userController->findById($_REQUEST['id']);

        foreach($values as $value) {
            $id = $value->id;
            $name = $value->name;
            $email = $value->email;
        }
    }

?>
    <div class="modalBody">
        <div>
            <h2>
                Form para Adicionar/Editar
            </h2>
        </div>
        <div class="form-group">
            <label class="form-label" for="name">Nome:</label><br>
            <input class="form-input" type="text" id="name" name="name" value="<?php echo $name ?>"><br>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email:</label><br>
            <input class="form-input" type="text" id="email" name="email" value="<?php echo $email ?>">
        </div>
        <div>
            <a class="form-btn" onclick="sendForm(<?php echo $id ?>)" rel="modal:close">Enviar</a>
        </div>
    </div>