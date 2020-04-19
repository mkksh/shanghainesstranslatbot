<?php

$BotToken="888888888";
$WebAddress="https://api.telegram.org/bot".$BotToken;
$updates=file_get_contents($WebAddress."/getupdates");

$updatearray=json_decode($updates, true);
$msgchatid=$updatearray["result"][0]["message"]["chat"]["id"];
$msgusername=$updatearray["result"][0]["message"]["chat"]["username"];
$msgtext=$updatearray["result"][0]["message"]["text"];

//print_r($updates);
print_r("<".$msgchatid.">".$msgusername.":".$msgtext);
file_get_contents($WebAddress."/sendmessage?chat_id=".$msgchatid."&text=".$msgusername.":".$msgtext);
?>