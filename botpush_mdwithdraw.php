<?php
$gclubid = $_GET['gclubid'];
$amount =number_format($_GET['amount'],2);
$tel = $_GET['tel'];

date_default_timezone_set('Asia/Bangkok');
$date = date_format(date(),"Y-m-d H:i:s");


require "vendor/autoload.php";

$access_token = 'BGFqduH48YAAWc9FYOu1FK12ah2JlNzho9UGguKqdpyBsHD8d9iE7KZ8gVPzESWqpfP5sDOeW9hRoXbZ7Y6VbSRGJZvs42x4BSsOOpdpf6bp3aTUYl8jN4dAsmRlO7o3jdPvoIzZXCOkjF1qHjZfuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6be6eb0f43914264279b926499d5d59a';
//test
//$pushID = 'Uc9c84f548b5a45f88a0392ddb018529c';

    //prod �?า�?
$pushID = 'Ca82be5bd1f697c64456712a9c95d9ea3';
    
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);



    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("GCLUBMD\n�١����駶͹\n�ѹ����� : ".$date."\nGCLUBID : ".$gclubid."\n�ʹ�Թ����ͧ��ö͹ : ".$amount." �ҷ\n�������١��� : ".$tel);




$response = $bot->pushMessage($pushID, $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
//$url = "Location:http://localhost/supportmd/public/gclub/".$id."/show";
//$url = "Location:http://support2md.com/gclub/".$id."/show";
//$url = "Location:https://gclubmd.com";
echo "GCLUBMD\n�١����駶͹\n�ѹ����� : ".$date."\nGCLUBID : ".$gclubid."\n�ʹ�Թ����ͧ��ö͹ : ".$amount." �ҷ\n�������١��� : ".$tel;

header($url);





