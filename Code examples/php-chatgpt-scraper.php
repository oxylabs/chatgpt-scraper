<?php

$params = array(
    'source' => 'chatgpt',
    'prompt' => 'best supplements for better sleep',
    'parse' => true,
    'geo_location' => "United States",
    'callback_url' => "https://your-server.com/oxylabs-callback"
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://data.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "USERNAME" . ":" . "PASSWORD");


$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
