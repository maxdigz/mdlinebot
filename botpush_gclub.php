<?php
$id = $_GET['id'];
$callcenter = $_GET['callcenter'];
$gclubid = $_GET['gclubid'];
$amount =$_GET['amount'];
$accname = $_GET['accname'];
$accno = $_GET['accno'];
$bank = $_GET['bank'];

$date = $_GET['date'];
$bbalance =$_GET['bbalance'];
$afbalance =$_GET['afbalance'];

require "vendor/autoload.php";

$access_token = 'BGFqduH48YAAWc9FYOu1FK12ah2JlNzho9UGguKqdpyBsHD8d9iE7KZ8gVPzESWqpfP5sDOeW9hRoXbZ7Y6VbSRGJZvs42x4BSsOOpdpf6bp3aTUYl8jN4dAsmRlO7o3jdPvoIzZXCOkjF1qHjZfuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6be6eb0f43914264279b926499d5d59a';
//test
//$pushID = 'Uc9c84f548b5a45f88a0392ddb018529c';

    //prod
$pushID = 'Cc96dc4b1e62fa26a177d5586dd4c38cc';
    
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("GCLUBMD\nแจ้งถอนเงิน\nวันที่ทำรายการ : ".$date."\ncallcenter : ".$callcenter."\nGCLUBID : ".$gclubid."\nก่อนทำรายการ : ".$bbalance." บาท\nจำนวนเงินที่ถอน : ".$amount." บาท\nหลังทำรายการ : ".$afbalance." บาท\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nธนาคาร : ".$bank);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
//$url = "Location:http://localhost/supportmd/public/gclub/".$id."/show";
$url = "Location:http://support.gclubmd.com/gclub/".$id."/show";

header($url);





