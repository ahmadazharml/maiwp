<?php 
 

$url = 'https://api.twilio.com/2010-04-01/Accounts/AC4244a6a3efbb7ac8da72613fca003bf6/Messages.json';
 
$from = "+14792529356";

$to = "+601131595402";

$body = $link1. "Hello ". $link2;

$id = "AC4244a6a3efbb7ac8da72613fca003bf6";

$token = "f10db1f05c42bc6f8074175c88f487da";

$data = array (

		'From' => $from,
		'To' => $to,
		'Body' => $body
		
		);
		
$post = http_build_query($data);
$x = curl_init($url);
curl_setopt($x, CURLOPT_POST, true);
curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($x, CURLOPT_POSTFIELDS, $post);

var_dump($post);
$y = curl_exec($x);
var_dump($y);
curl_close($x);