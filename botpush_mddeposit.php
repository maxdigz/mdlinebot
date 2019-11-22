<?php

$gclubid = $_GET['gclubid'];
$amount =number_format($_GET['amount']);
$date = $_GET['date'];
$time = $_GET['time'];
$bank = $_GET['bank'];
$img = $_GET['img'];
date_default_timezone_set('Asia/Bangkok');
require "vendor/autoload.php";

$access_token = 'BGFqduH48YAAWc9FYOu1FK12ah2JlNzho9UGguKqdpyBsHD8d9iE7KZ8gVPzESWqpfP5sDOeW9hRoXbZ7Y6VbSRGJZvs42x4BSsOOpdpf6bp3aTUYl8jN4dAsmRlO7o3jdPvoIzZXCOkjF1qHjZfuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6be6eb0f43914264279b926499d5d59a';
//test
//$pushID = 'Uc9c84f548b5a45f88a0392ddb018529c';

    //prod ฝาก
$pushID = 'Cd61fe69f8556a2802b0e63743918945f';
    
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("GCLUBMD\nแจ้งฝากเงิน\nวันที่ทำรายการ : ".date("Y-m-d H:i:s")."\nGCLUBID : ".$gclubid."\nจำนวนเงินที่แจ้งฝาก : ".$amount." บาท\nวันที่แจ้งฝาก : ".$date."\nเวลาที่แจ้งฝาก : ".$time." น.\nฝากเข้าธนาคาร(GCLUBMD) : ".$bank."\nสลิป ยืนยัน: ".$img);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
//$url = "Location:http://localhost/supportmd/public/gclub/".$id."/show";
//$url = "Location:http://support2md.com/gclub/".$id."/show";
$url = "Location:https://gclubmd.com";

header($url);





