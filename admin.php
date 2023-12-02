<?php

                             //==[Vip Promote Command]==//

if ((strpos($message, "!vip") === 0)||(strpos($message, "/vip") === 0)||(strpos($message, ".vip") === 0)||(strpos($message, ",vip") === 0)){
sendChatAction($chatId, "type");
if ($gId != 6258363248) { sendMessage($chatId, "• <b>TU NO ERES ADMIN</b>", $message_id);exit();}
if(empty($r_userId)){
$r_userId = substr($message, 5);}
$user = file_get_contents('Database/vusers.txt', 1);
$members = explode("\n", $user);
        if (!in_array($r_userId, $members)) {
            $add_user = file_get_contents('Database/vusers.txt');
            $add_user .= $r_userId . "\n";
            file_put_contents('Database/vusers.txt', $add_user);
            file_put_contents('Database/pusers.txt', $add_user);
sendMessage($chatId, "• <b><b><a href='tg://user?id=$r_userId'>$r_firstname</a></b>ASIENDE A PLAN VIP</b>", $message_id);
}
else { sendMessage($chatId, "• <b><b><a href='tg://user?id=$r_userId'>$r_firstname</a></b>ASCENDISTE A PLAN VIP</b>", $message_id);
}}

  /////////////////////////////////////END///////////////////////////////////////////

                             //==[Premium Promote Command]==//

if ((strpos($message, "!prm") === 0)||(strpos($message, "/prm") === 0)||(strpos($message, ".prm") === 0)||(strpos($message, ",prm") === 0)){
sendChatAction($chatId, "type");
if ($gId != 1205552129) { sendMessage($chatId, '• <b>TU NO ERES ADMIN CONTACTA A 𝗧𝗫𝗙𝗡𝗫 </b>', $message_id);exit();}
if(empty($r_userId)){
$r_userId = substr($message, 5);}
$user = file_get_contents('Database/pusers.txt', 1);
$members = explode("\n", $user);
        if (!in_array($r_userId, $members)) {
            $add_user = file_get_contents('Database/pusers.txt');
            $add_user .= $r_userId . "\n";
            file_put_contents('Database/pusers.txt', $add_user);
sendMessage($chatId, "• <b><b><a href='tg://user?id=$r_userId'>$r_firstname</a></b> AHORA ERES PREMIUM</b>", $message_id);
}
else { sendMessage($chatId, "• <b><b><a href='tg://user?id=$r_userId'>$r_firstname</a></b>YA ERES PREMIUM</b>", $message_id);
}}

  /////////////////////////////////////END///////////////////////////////////////////
  
?>