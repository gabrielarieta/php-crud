<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controller/ColorUserController.php";

$colorUserController = new ColorUserController();

$colorUsers = $colorUserController->listAll();
?>
    <h1>Cores dos Usuários</h1>

    <div class="addDiv">
        <a href="view/color-user/requests/openModal.php" rel="modal:open">&#10009</a>
    </div>

    <div class="tableDiv">
        <table class="defaultTable">
            <tr>
                <th>Nome</th>    
                <th>Cor</th>
                <th></th>
                <th>Ações</th>    
            </tr>
            <?php
            foreach($colorUsers as $colorUser) {

                echo sprintf("<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td style=\"background-color: %s; transition: background-color .5s; \"></td>
                                <td>
                                    <a href='view/color-user/requests/openModal.php?id=%s&colorId=%s&userId=%s' rel='modal:open'>&#9998</a>
                                    <a href='#' id='delete_button' onclick='deleteColorUser(%s)'>&#10006;</a>
                                </td>
                            </tr>",
                    $colorUser->user, $colorUser->color, $colorUser->colorHex, $colorUser->id,  $colorUser->colorId, $colorUser->userId, $colorUser->id);

            }
            ?>
        </table>
    </div>
    
<script src="view/color-user/js/color-user.js"></script>