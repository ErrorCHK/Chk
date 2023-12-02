<?php

# -------------------- [PROXY SECTION] -------------------#

////////////////////////////===[Webshare Details]

$input = 
["h4p6qznqix11ki31lkqp9e7u90g16zihutvdzxvy",
"h0leeib9gd702sy7jwuhxfn1k4clp39uyfi3ssmy"];


//$input = ["l9bk8lzp6d6cyp7rlrkml3xyhfm7ft2dj1122xdl"];
$webshare_token = $input[array_rand($input)];
$prox = curl_init();
curl_setopt($prox, CURLOPT_URL, 'https://proxy.webshare.io/api/proxy/list/');
curl_setopt($prox, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($prox, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Authorization: Token '.$webshare_token.'';
curl_setopt($prox, CURLOPT_HTTPHEADER, $headers);
$result1 = curl_exec($prox);
curl_close($prox);

$prox_res = json_decode($result1, 1);
$count = $prox_res['count'];
$random = rand(0,$count-1);

$proxy_ip = $prox_res['results'][$random]['proxy_address'];
$proxy_port = $prox_res['results'][$random]['ports']['socks5'];
$proxy_user = $prox_res['results'][$random]['username'];
$proxy_pass = $prox_res['results'][$random]['password'];

$proxy = ''.$proxy_ip.':'.$proxy_port.'';
$credentials = ''.$proxy_user.':'.$proxy_pass.'';
$useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";

/*
$proxy = "bd.porterproxies.com:8888";

$credentials = "user-PP_ED0K0AL-country-us-plan-luminati:le6kknlj";
*/
/////////////////////////////////////END///////////////////////////////////////////
?>