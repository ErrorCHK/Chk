<?php

$user = file_get_contents('Database/users.txt');
$members = explode("\n", $user);
        if (!in_array($gId, $members)) { sendMessage($chatId, "<b>❌NO ESTAS REGISTRADO %0AUSA /register PARA REGISTRARTE</b>", $message_id);exit()
            ;}


?>