<?php
$id = $_GET['id'];
$callcenter = $_GET['callcenter'];
$lsmid = $_GET['lsmid'];
$amount =$_GET['amount'];
$accname = $_GET['accname'];
$accno = $_GET['accno'];
$bank = $_GET['bank'];

$date = $_GET['date'];


require "vendor/autoload.php";

$access_token = 'BGFqduH48YAAWc9FYOu1FK12ah2JlNzho9UGguKqdpyBsHD8d9iE7KZ8gVPzESWqpfP5sDOeW9hRoXbZ7Y6VbSRGJZvs42x4BSsOOpdpf6bp3aTUYl8jN4dAsmRlO7o3jdPvoIzZXCOkjF1qHjZfuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6be6eb0f43914264279b926499d5d59a';

$pushID = 'Uc9c84f548b5a45f88a0392ddb018529c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("LSM99\n\nแจ้งถอนเงิน\n\nวันที่ทำรายการ : ".$date."\n\ncallcenter : ".$callcenter."\nLSMID : ".$lsmid."\nจำนวนเงินที่ถอน : ".$amount." บาท\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nธนาคาร : ".$bank);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
$url = "Location:http://localhost/supportmd/public/lsm99/".$id."/show";
header($url);





