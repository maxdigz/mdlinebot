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

$access_token = 'YSwPWOmQZUB14QF6JAhdODRHiMs4Z0zotyIB4GlEokSYN9PTjc/n4xEFqaf7rdQcGxH26Kv0iML+c9zf8NPC1w4aS4bYzHVDLz26NqTZbTFFmj6HTbKnGKHn5/SBjo1N5VCe/0tXvSYlvHBT10mJOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '29fff734004173ddce5cabc6fce23a38';

$pushID = 'C4771fc3fc0b657a4d44933a1ba6fdd92';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("LSM99\nแจ้งถอนเงิน\nวันที่ทำรายการ : ".$date."\ncallcenter : ".$callcenter."\nLSMID : ".$lsmid."\nจำนวนเงินที่ถอน : ".$amount." บาท\nชื่อบัญชี : ".$accname."\nเลขที่บัญชี : ".$accno."\nธนาคาร : ".$bank);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

function goback()
{
   // header("Location: {$_SERVER['HTTP_REFERER']}?success=1");
    header("Location:http://support.gclubmd.com/lsm99/".$id."/show?success=1");
    exit;
}
//goback();





