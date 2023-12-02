<?php

$E = (str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz'));
$DP = (str_shuffle('abcdefghijklmnopqrstuvwxyz'));
$email = substr($E , 50);

$poxyyyy = "2.56.119.93:5074";
$loginnnnn = "ylbgmjgs:b7rflzmc7ps6";

$ch = curl_init();
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $poxyyyy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$loginnnnn);
curl_setopt($ch, CURLOPT_URL, 'https://spclient.wg.spotify.com/signup/public/v1/account/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'Host: spclient.wg.spotify.com',
'Cache-Control: no-cache',
'App-Platform: iOS',
'content-type: application/x-www-form-urlencoded',
'User-Agent: Spotify/8.6.4 iOS/13.5 (iPad11,1)',
'Spotify-App-Version: 8.6.4',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'displayname='.$DP.'&email='.$email.'@MrHaKeRxZz.com&iagree=1&birth_month=3&gender=male&password_repeat=MrHaKeRxZz.com&password=MrHaKeRxZz.com&creation_point=client_mobile&key=bff58e9698f40080ec4f9ad97a2f21e0&birth_year=1994&platform=iOS-ARM&birth_day=20');
$curl1 = curl_exec($ch);
curl_close($ch);

$susername = trim(strip_tags(getStr($curl1,'username":"','"')));
$scountry = trim(strip_tags(getStr($curl1,'country":"','"')));

if (strpos($curl1, 'status":1')){
sendMessage($chatId, "<b>• Spotify Account Created Successfully :- </b>%0A%0A--» <u>Login Details </u>🗝️%0A<u> EMAIL </u> :  <code>$email@MrHaKeRxZz.com</code>%0A <u>PASS</u>  : <code>MrHaKeRxZz.com</code>%0A--» <u>Username </u> : $susername%0A--» <u>Country🏴󠁥󠁳󠁰󠁶󠁿</u> : $scountry%0A%0A<b>• Other Info :- </b>%0A%0A-» <u>Requested By🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> %0A-» <u>Bot By👨‍💼</u> : <code>MrHaKeRxZz</code>%0A", $message_id);
}
elseif (strpos($curl1, 'status":320')){
sendMessage($chatId, '<b>• Proxy Error_Something Went Wrong Try Again</b>', $message_id);
}
else{
sendMessage($chatId, '<b>• Proxy Error_Something Went Wrong Try Again</b>', $message_id);
}
curl_close($ch);

?>