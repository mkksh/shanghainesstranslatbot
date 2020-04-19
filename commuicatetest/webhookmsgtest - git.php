<?php

$BotToken="1212475002:AAFPEfNd8rH7eDReSba-7w0GlKuYQ6KDD34";
$WebAddress="https://api.telegram.org/bot".$BotToken;
$updates=file_get_contents("php://input");

$updatearray=json_decode($updates, TRUE);
//$msgtest=$updatearray["result"][0]["update_id"];
$msgchatid=$updatearray["message"]["chat"]["id"];
$msgusername=$updatearray["message"]["chat"]["username"];
$msgtext=$updatearray["message"]["text"];

//file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=".$updates);
//file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=".$msgtest);
//foreach($updatearray as $value){
//    if( is_array($value) ) {foreach( $value as $subvalue) {
//        file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=uuu".$subvalue);
//    }}
//    else{file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=uuu".$subvalue);}
//}
//file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=uuu".$msgchatid);
//time.sleep(5);
//file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=".$msgusername);
//time.sleep(5);
//file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=".$msgtext);
//time.sleep(5);
file_get_contents($WebAddress."/sendmessage?chat_id=".$msgchatid."&text=".$msgusername.":".$msgtext);
file_get_contents($WebAddress."/sendmessage?chat_id=1057307773&text=<".$msgchatid.">".$msgusername.":".$msgtext);
?>