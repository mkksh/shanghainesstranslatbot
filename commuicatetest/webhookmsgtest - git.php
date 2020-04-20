<?php

$BotToken="your token";
$WebAddress="https://api.telegram.org/bot".$BotToken;
$updates=file_get_contents("php://input");

$updatearray=json_decode($updates, TRUE);
if (!$updatearray) {
    // receive wrong update, must not happen
    exit;
  }

  if (isset($updatearray["message"])) {
    
  
  //$msgtest=$updatearray["result"][0]["update_id"];
$msgchatid=$updatearray["message"]["chat"]["id"];
$msgfromusername=$updatearray["message"]["from"]["username"];
$msgusername=$updatearray["message"]["chat"]["username"];
$msgtext=$updatearray["message"]["text"];

/
file_get_contents($WebAddress."/sendmessage?chat_id=".$msgchatid."&text=".$msgfromusername."@".$msgusername.":".$msgtext);


?>