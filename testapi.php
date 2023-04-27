<?php
header('Content-Type: application/json; charset=UTF-8');

$url = "http://localhost/lotto/test/hellow.php";

$body_data = array(
	"data1" => "test1",
	"data2" => "test2"
);

$body = json_encode($body_data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec ($ch);

print_r($result);
?>