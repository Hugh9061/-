<?php

$MERCHANTID     = 'xxxxxxxxxxxxxxxx';  //商户号
$POSID          = 'xxxxxxxxx';
$BRANCHID       = 'xxxxxxxxx';
$ORDERID        = '';
$PAYMENT        = '0.01';
$CURCODE        = '01';
$TYPE           = '1';
$PUB            = 'xxxxxxxxxxxxxxxxxxxx';
$GATEWAY        = '0';
$TRADE_TYPE     = 'MINIPRO';
$SUB_APPID      = 'xxxxxxxxxxxxx';
$SUB_OPENID     = 'xxxxxxxxxxxxxxxxxxxxx';

$str1 =
    "MERCHANTID=" . $MERCHANTID . "&" .
    "POSID=" . $POSID . "&" .
    "BRANCHID=" . $BRANCHID . "&" .
    "ORDERID=" . $ORDERID . "&" .
    "PAYMENT=" . $PAYMENT . "&" .
    "CURCODE=" . $CURCODE . "&" .
    "TXCODE=530590&" .
    "REMARK1=&REMARK2=&" .
    "TYPE=" . $TYPE . "&" .
    "PUB=" . $PUB . "&" .
    "GATEWAY=" . $GATEWAY . "&" .
    "CLIENTIP=&REGINFO=&PROINFO=&REFERER=&" .
    "TRADE_TYPE=" . $TRADE_TYPE . "&" .
    "SUB_APPID=" . $SUB_APPID . "&" .
    "SUB_OPENID=" . $SUB_OPENID;

$str2 =
    "MERCHANTID=" . $MERCHANTID . "&" .
    "POSID=" . $POSID . "&" .
    "BRANCHID=" . $BRANCHID . "&" .
    "ORDERID=" . $ORDERID . "&" .
    "PAYMENT=" . $PAYMENT . "&" .
    "CURCODE=" . $CURCODE . "&" .
    "TXCODE=530590&" .
    "REMARK1=&REMARK2=&" .
    "TYPE=" . $TYPE . "&" .
    "GATEWAY=" . $GATEWAY . "&" .
    "CLIENTIP=&REGINFO=&PROINFO=&REFERER=&" .
    "TRADE_TYPE=" . $TRADE_TYPE . "&" .
    "SUB_APPID=" . $SUB_APPID . "&" .
    "SUB_OPENID=" . $SUB_OPENID;

$str3 =  $str2 . "&MAC=" . md5($str1);

$url = 'https://ibsbjstar.ccb.com.cn/CCBIS/B2CMainPlat_02?CCB_IBSVersion=V6&' . $str3;

print_r($url);
