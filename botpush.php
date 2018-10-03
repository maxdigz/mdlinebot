<?php

$name = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$line = $_GET['line'];
$accname = $_GET['accname'];
$accno = $_GET['accno'];
$bank = $_GET['bank'];


$username = $_GET['username'];
$amount = $_GET['amount'];
$bankto = $_GET['bankto'];
$accnoto = $_GET['accnoto'];
$date = $_GET['date'];
$time = $_GET['time'];
$tway = $_GET['tway'];
$type =$_GET['type'];

require "vendor/autoload.php";

$access_token = 'YSwPWOmQZUB14QF6JAhdODRHiMs4Z0zotyIB4GlEokSYN9PTjc/n4xEFqaf7rdQcGxH26Kv0iML+c9zf8NPC1w4aS4bYzHVDLz26NqTZbTFFmj6HTbKnGKHn5/SBjo1N5VCe/0tXvSYlvHBT10mJOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '29fff734004173ddce5cabc6fce23a38';

$pushID = 'C4771fc3fc0b657a4d44933a1ba6fdd92';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


if($type == 'deposit'){
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("SBOBET\nฝากเงิน\nUsername : ".$username."\nเบอร์โทร : ".$mobile."\nธนาคารที่ใช้โอน : ".$bank."\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nจำนวนเงินที่ฝาก : ".$amount."\nธนาคารที่โอนเข้า : ".$bankto."\nเลขที่บัญชีที่โอนเข้า:  ".$accnoto."\nวันที่โอน : ".$date."\nเวลาโอน : ".$time."\nช่องทางการโอน :".$tway);}
if($type == 'withdraw'){
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("SBOBET\nถอนเงิน\nUsername : ".$username."\nเบอร์โทร : ".$mobile."\nธนาคาร : ".$bank."\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nจำนวนเงินที่ถอน : ".$amount);}

if(empty($type)){
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("SBOBET\nสมัครสมาชิก\nชื่อ : ".$name."\nเบอร์โทร : ".$mobile."\nemail : ".$email."\nLineID : ".$line."\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nธนาคาร : ".$bank);}



$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    exit;
}
goback();





