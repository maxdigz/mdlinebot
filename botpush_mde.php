<?php
$id = $_GET['id'];

$amount =$_GET['amount'];
$name =$_GET['name'];
$date = $_GET['date'];

require "vendor/autoload.php";
date_default_timezone_set("Asia/Bangkok");
$access_token = 'BGFqduH48YAAWc9FYOu1FK12ah2JlNzho9UGguKqdpyBsHD8d9iE7KZ8gVPzESWqpfP5sDOeW9hRoXbZ7Y6VbSRGJZvs42x4BSsOOpdpf6bp3aTUYl8jN4dAsmRlO7o3jdPvoIzZXCOkjF1qHjZfuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6be6eb0f43914264279b926499d5d59a';
//test
//$pushID = 'Uc9c84f548b5a45f88a0392ddb018529c';

    //prod
$pushID = 'C6a2f0a5e78e405f6ae34649dba69cda9';
    
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



 //   $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("GCLUBMD\nแจ้งถอนเงิน\nวันที่ทำรายการ : ".$date."\ncallcenter : ".$callcenter."\nGCLUBID : ".$gclubid."\nก่อนทำรายการ : ".$bbalance." บาท\nจำนวนเงินที่ถอน : ".$amount." บาท\nหลังทำรายการ : ".$afbalance." บาท\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nธนาคาร : ".$bank);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("แจ้งฝากเงิน\nวันที่ทำรายการ : ".$date."\n918KissID : ".$id."\nชื่อลูกค้า :".$name."\nจำนวนเงินที่แจ้งฝาก : ".$amount." บาท");

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("มีลูกค้าทำการสมัคร ".date("Y-m-d H:i:s") );


$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
//$url = "Location:http://localhost/supportmd/public/gclub/".$id."/show";
//$url = "Location:http://support2md.com/gclub/".$id."/show";
//$url="Location:http://localhost/securemgame/public/";
$url="Location:https://secure.mgame888.com/";
header($url);





