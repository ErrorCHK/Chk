<?php

$user = file_get_contents('Database/pusers.txt');
$members = explode("\n", $user);
        if (!in_array($gId, $members) and !in_array($chatId, $members)) { sendMessage($chatId, "<b>❌NO ERES USUARIO PREMIUM❌%0ASI QUIERES ADQUIRIR CONTACTA A MI DIOS <b><a href='tg://user?id=6258363248'>Fares</a></b></b>", $message_id);exit()
            ;}


?>