<?php
$url = "https://api.openweathermap.org/data/2.5/forecast?lat=35.17332899587668&lon=129.13085319903072&lang=en&units=metric&appid=appkey";
$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

$jsondata = json_decode($response);

echo "<pre>";
print_r($jsondata);
echo "</pre>";
?>