<?php

$BotToken="88888";
$WebAddress="https://api.telegram.org/bot".$BotToken;
$updates=file_get_contents("php://input");

$updatearray=json_decode($updates, TRUE);
//$msgtest=$updatearray["result"][0]["update_id"];
$msgchatid=$updatearray["message"]["chat"]["id"];
$msgusername=$updatearray["message"]["chat"]["username"];
$msgtext=$updatearray["message"]["text"];


file_get_contents($WebAddress."/sendmessage?chat_id=".$msgchatid."&text=".$msgusername.":".$msgtext);

?>