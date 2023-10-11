<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controller/UserController.php";

$userController = new UserController();

$users = $userController->listAll();
?>
    <h1>Usuários</h1>
    <div class="addDiv">
        <a href="view/user/requests/openModal.php" rel="modal:open">&#10009</a>
    </div>

    <div class="tableDiv">
        <table class="defaultTable">
            <tr>
                <th>ID</th>    
                <th>Nome</th>    
                <th>Email</th>
                <th>Ação</th>    
            </tr>
            <?php
            foreach($users as $user) {

                echo sprintf("<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>
                                    <a href='view/user/requests/openModal.php?id=%s' rel='modal:open'>&#9998</a>
                                    <a href='#' id='delete_button' onclick='deleteUser(%s)'>&#10006;</a>
                                </td>
                            </tr>",
                    $user->id, $user->name, $user->email, $user->id, $user->id);

            }
            ?>
        </table>
    </div>
    
<script src="view/user/js/user.js"></script>