<?php 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:8000');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);

var_dump($decoded);
curl_close($ch);
