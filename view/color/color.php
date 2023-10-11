<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorController.php";

$colorController = new ColorController();

$colors = $colorController->listAll();
?>
    <h1>Cores</h1>

    <div class="addDiv">
        <a href="view/color/requests/openModal.php" rel="modal:open">&#10009</a>
    </div>

    <div class="tableDiv">
        <table class="defaultTable">

            <tr>
                <th>ID</th>    
                <th>Nome</th>    
                <th>Cor</th>
                <th>Ação</th>    
            </tr>
        <?php
            foreach($colors as $color) {

                echo sprintf("<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td style=\"background-color: %s; transition: background-color .5s; \"></td>
                                <td>
                                    <a href='view/color/requests/openModal.php?id=%s' rel='modal:open'>&#9998</a>
                                    <a href='#' id='delete_button' onclick='deleteColor(%s)'>&#10006</a>
                                </td>
                            </tr>",
                    $color->id, $color->name, $color->colorhex, $color->id, $color->id);

            }
        ?>
        </table>
    </div>
<script src="view/color/js/color.js"></script>