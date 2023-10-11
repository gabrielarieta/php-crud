<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorController.php";

    $colorController = new ColorController();

    if($_REQUEST['id']) {
        $values = $colorController->findById($_REQUEST['id']);

        foreach($values as $value) {
            $id = $value->id;
            $name = $value->name;
            $colorhex = $value->colorhex;
        }
    }

?>
    <div>
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
            <label class="form-label" for="colorhex">Cor:</label><br>
            <input class="form-color-picker" type="color" id="colorhex" name="colorhex" value="<?php echo $colorhex ?>" />
        </div>
        <div class="form-group">
            <a class="form-btn" onclick="sendForm(<?php echo $id ?>)" rel="modal:close">Enviar</a>
        </div>
    </div>