<?php
error_reporting(0);

function MultiExplodea($delimiters, $string)
    {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    
$get_Card = $_GET['lista'];

$bin = MultiExplodea([":", "|", "⋙", " ", "/"], $get_Card)[0];
if(is_numeric($bin) & strlen($bin) == 16){
    echo "Same Card Number, Try Other Extra";
    exit;
}
    $mes = MultiExplodea([":", "|", "⋙", " ", "/"], $get_Card)[1];
   
    $ano = MultiExplodea([":", "|", "⋙", " ", "/"], $get_Card)[2];
   
    $cvv = MultiExplodea([":", "|", "⋙", " ", "/"], $get_Card)[3];

        if(!is_numeric($cvv)){
    $cvv = '';
}
if(!is_numeric($mes)){
    $mes = '';
}
if(!is_numeric($ano)){
    $ano = '';
}
if(strlen($ano) == 2){
	$ano = "20$ano";
}
 

        
echo CCs($bin, $mes, $ano, $cvv);

#FUNCIONES REQUERIDAS

function CCs($bin, $mes, $ano, $cvv)
{
    if (!is_numeric(substr($bin, 0, 6))) {
        return "Invalid Format, Check Your Input";
    } else {
        for ($i = 1; $i <= 10; $i++) {
            gerarCC($bin);
            gerarCcMes($mes);
            gerarCcAno($ano);
            gerarCcCvv($cvv);
            $cc[$i] = "<code>".$GLOBALS["ccnum"] ."|".$GLOBALS["month"]."|".$GLOBALS["year"]."|".$GLOBALS["cvv"]."</code>";
        }
        return  $cc[1]."\n".$cc[2]."\n".$cc[3]."\n".$cc[4]."\n".$cc[5]."\n".$cc[6]."\n".$cc[7]."\n".$cc[8]."\n".$cc[9]."\n".$cc[10];
    }
}

function gerarCC($bin)
{
    if (substr_compare($bin, 37, 0, 2)) {
        $ccbin = preg_replace("/[^0-9x]/", "", substr($bin, 0, 15));
        for ($i = 0; $i < strlen($ccbin); $i++) {
            if ($ccbin[$i] == "x") {
                $ccbin[$i] = mt_rand(0, 9);
            }
        }
        $GLOBALS["ccnum"] = ccgen_number($ccbin, 16);
    } else {
        $ccbin = preg_replace("/[^0-9x]/", "", substr($bin, 0, 14));
        for ($i = 0; $i < strlen($ccbin); $i++) {
            if ($ccbin[$i] == "x") {
                $ccbin[$i] = mt_rand(0, 9);
            }
        }
        $GLOBALS["ccnum"] = ccgen_number($ccbin, 15);
    }
}

function gerarCcCvv($cvv)
{
    if (!empty($cvv)) {
        $GLOBALS["cvv"] = $cvv;
    } elseif (substr_compare($GLOBALS["bin"], 37, 0, 2)) {
        $GLOBALS["cvv"] = mt_rand(112, 998);
    } else {
        $GLOBALS["cvv"] = mt_rand(1102, 9998);
    }
}

function gerarCcMes($mes)
{
    if (!empty($mes)) {
        $GLOBALS["month"] = $mes;
    } else {
        $moth             = mt_rand(1, 12);
        $GLOBALS["month"] = (($moth < 10) ? '0' . $moth : $moth);
    }
}

function gerarCcAno($ano)
{
    if (!empty($ano)) {
        if (strlen($ano) == 2) {
            $GLOBALS["year"] = "20".$ano;
        } else {
            $GLOBALS["year"] = $ano;
        }
    } else {
        $GLOBALS["year"] = mt_rand(2022, 2027);
    }
}

function ccgen_number($prefix, $length)
{
    $ccnumber = $prefix;
    while (strlen($ccnumber) < ($length - 1)) {
        $ccnumber .= mt_rand(0, 9);
    }
    $sum              = 0;
    $pos              = 0;
    $reversedCCnumber = strrev($ccnumber);
    while ($pos < $length - 1) {
        $odd = $reversedCCnumber[$pos] * 2;
        if ($odd > 9) {
            $odd -= 9;
        }
        $sum += $odd;
        if ($pos != ($length - 2)) {
            $sum += $reversedCCnumber[$pos + 1];
        }
        $pos += 2;
    }
    $checkdigit = ((floor($sum / 10) + 1) * 10 - $sum) % 10;
    $ccnumber .= $checkdigit;
    return $ccnumber;
}
