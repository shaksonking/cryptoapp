<?php 
include "config.php";
$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/getMe";
$response = file_get_contents($apiUrl);

var_dump($response);

exit();

if($response === false){
	echo "Error";
	exit(0);
}else {
	$data = json_decode($response, true);
	if($data['ok'] == true){
		// var_dump($data['result']);
		echo "Bot Name: {$data['result']['username']}\n";
		echo "Bot Id: {$data['result']['id']}\n";
	}
}


