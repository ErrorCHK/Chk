<?php

$key = substr($message, 4);

preg_match_all("([0-9A-Za-z]+(_[0-9A-Za-z]+)+)", $key, $secc);

$sec = $secc[0][0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2025&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$rsppp = trim(strip_tags(getStr($result,'code": "','"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];
$time1 = substr_replace($time, '',4);

                            # SK Balance
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'Authorization: Bearer '.$sec.'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookiess.txt');
$stripe = curl_exec($ch);
//echo ($stripe);
$balance = trim(strip_tags(getStr($stripe,'amount": ',',')));
$Currency = trim(strip_tags(getStr($stripe,'currency": "','",')));

if (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A⚠️ Rate Limited%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆: <code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: Stripe Key Is Rate Limited %0A𝙱𝚊𝚕𝚊𝚗𝚌𝚎: $balance %0A𝙲𝚘𝚞𝚗𝚝𝚛𝚢 𝚌𝚞𝚛𝚛𝚎𝚗𝚌𝚢: $Currency %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢: @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}
elseif (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A❌ DEAD KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆:<code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: Provided Stripe Key Is Expired%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}
elseif (strpos($result, 'You did not provide an API key')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A❌ $sec Sk Key Not Provided%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆: <code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: Please Provide Stripe Key%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢: @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A❌ DEAD KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A<code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: INVALID KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A❌ DEAD KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆:<code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: Testmode Charges Only%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢: @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}
elseif (strpos($result, 'decline_code"')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A✅ LIVE KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆: <code>$sec</code>%0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: Provided Stripe Key Is LIVE!! %0A𝗕𝗮𝗹𝗮𝗻𝗰𝗲: $balance %0A𝗖𝗼𝘂𝗻𝘁𝗿𝘆 𝗖𝘂𝗿𝗿𝗲𝗻𝗰𝘆: $Currency %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢: @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A</b>", $message_id);
}
else {
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━%0A❌ DEAD KEY%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝗞𝗲𝘆:<code>$sec</code> %0A%0A𝗠𝗲𝘀𝘀𝗮𝗴𝗲: $rsppp %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢: @$username %0A𝚃𝚒𝚖𝚎 𝚂𝚎𝚌𝚘𝚗𝚍𝚜: $time1 seconds%0A━━━━━━━━━━━━━━━━━━━━━━━%0A</b>", $message_id);
}

?>