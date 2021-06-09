<?php
/*
*https://api.telegram.org/bot{my_bot_token}/setWebhook?url={url_to_send_updates_to}
* Created by Rafael Fernandes
* Bot to get ip location
*/
include "includes/Telegram.php";
include "includes/procurar_ip.php";

$telegram = new Telegram('tokem');
$texto = $telegram->Text();
$chat_id = $telegram->ChatID();
$parte=explode(" ", $texto);

if($texto == "/start") {

    $option = [['/start']];
    // Create a permanent custom keyboard
    $keyb = $telegram->buildKeyBoard($option, $onetime = false);

$content =array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => 'Bem vindos ao bot local-ip.
Envie /ip juntamente com o ip ou domínio que você quer localizar.');
$telegram->sendMessage($content);
}

if($parte[0] == "/ip") {
$gip=procurar($parte[1]);

$content =array('chat_id' => $chat_id, 'text' => $gip);
$telegram->sendMessage($content);
}
  
?>